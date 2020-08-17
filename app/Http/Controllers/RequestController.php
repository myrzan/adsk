<?php
namespace App\Http\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception as phpMailerException;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function request(Request $request)
    {
        $phone   = $request->get('phone');
        $to      = 'dauletmyrzan@gmail.com';
        $subject = 'Обратный звонок АДСК';
        $message = '<p>На сайте оставлена заявка на обратный звонок.</p> </br> <b>Номер: <a href="tel:'.$phone.'">'.$phone.'</a></b>';
        $mail    = new PHPMailer(true); // notice the \  you have to use root namespace here

        $mail->isSMTP();
        $mail->CharSet = "utf-8";
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "tls";
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 587;
        $mail->Username = "jacksstudiokz@gmail.com";
        $mail->Password = "fciaqzftrwxkvjhe";
        $mail->setFrom("info@adsk.kz", "АДСК");
        $mail->Subject = $subject;
        $mail->MsgHTML($message);
        $mail->addAddress($to, "Daulet");

        if ($mail->send()) {
            $json = [
                'status'  => 'ok',
                'html' => '<h3 class="text-center">Спасибо, наш специалист скоро с вами свяжется!</h3>',
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
