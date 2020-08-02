$(document).ready(function() {
    setTimeout(function() {
        $('#welcome').fadeIn(1000);
        setTimeout(function() {
            $('#welcome').fadeOut(1000);
            $('.main').onepage_scroll({
                sectionContainer: 'section',
                easing: 'ease',
                animationTime: 700,
                pagination: true,
                updateURL: false,
                loop: false,
                keyboard: true,
                direction: 'vertical',
            });
        }, 3000);
    }, 500);
});
