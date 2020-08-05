$(document).ready(function() {
    setTimeout(function() {
        $('#welcome').fadeOut();
    }, 3);

    $('.main').onepage_scroll({
        sectionContainer: 'section',
        easing: 'ease',
        animationTime: 7,
        pagination: true,
        updateURL: false,
        loop: false,
        keyboard: true,
        direction: 'vertical',
        afterMove: function (index) {
            if (index > 2) {
                $(".whatsapp").hide()
            } else {
                $(".whatsapp").show()
            }
        }
    });

    function toggleSidebar() {
        $("#sidebar_toggler").toggleClass("close");
        $(".sidebar").toggleClass("collapsed");
    }

    $("#sidebar_toggler").on("click tap", function() {
        toggleSidebar();
    });
});
