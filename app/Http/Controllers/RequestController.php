<?php
namespace App\Http\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    /**
     * Отправляет письмо на заданный email.
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \PHPMailer\PHPMailer\Exception
     */
    public function request(Request $request)
    {
        $secretKey    = env('GOOGLE_SECRET');
        $url          = 'https://www.google.com/recaptcha/api/siteverify?secret='
                      . urlencode($secretKey) . '&response=' . urlencode($request->get('recaptcha'));
        $response     = file_get_contents($url);
        $responseKeys = json_decode($response,true);

        if(!$responseKeys["success"]) {
            $json = [
                'status'  => 'error',
                'message' => 'Вы забыли отметить галочку "Я не робот"',
            ];

            return response()->json($json);
        }

        $name    = $request->get('name');
        $phone   = $request->get('phone');
        $to      = env('MAIL_TO');
        $subject = 'Обратный звонок АДСК';
        $message = '<p>На сайте оставлена заявка на обратный звонок.</p> </br><p>Имя: '. $name .'</p> <b>Номер: <a href="tel:'.$phone.'">'.$phone.'</a></b>';
        $mail    = new PHPMailer(true);

        $mail->isSMTP();
        $mail->CharSet = "utf-8";
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = env('MAIL_ENCRYPTION');
        $mail->Host = env('MAIL_HOST');
        $mail->Port = env('MAIL_PORT');
        $mail->Username = env('MAIL_FROM');
        $mail->Password = env('MAIL_PASSWORD');
        $mail->setFrom(env('MAIL_FROM_NAME'), "ADSK");
        $mail->Subject = $subject;
        $mail->MsgHTML($message);
        $mail->addAddress($to, "ADSK");

        if ($mail->send()) {
            $json = [
                'status' => 'ok',
                'html'   => '<h3 class="text-center">Спасибо, наш специалист скоро с вами свяжется!</h3>',
            ];
        } else {
            $json    = [
                'status'  => 'error',
                'message' => 'Произошла ошибка, попробуйте позднее.',
            ];
        }

        return response()->json($json);
    }
}
