$(document).ready(function() {
    let env = 'prod';

    if ($(window).scrollTop() === 0) {
        setTimeout(function() {
            $('#welcome').fadeOut(env === 'dev' ? 1 : 300);
            $("body").css("overflow-y", "auto");
            $('.sidebar').removeClass('translated');
        }, env === 'dev' ? 1 : 3000);
    } else {
        $('#welcome').hide();
        $("body").css("overflow-y", "auto");
        $('.sidebar').removeClass('translated');
    }

    // $('.main').onepage_scroll({
    //     sectionContainer: 'section',
    //     easing: 'ease',
    //     animationTime: env === 'dev' ? 1 : 700,
    //     pagination: true,
    //     updateURL: false,
    //     loop: false,
    //     keyboard: true,
    //     direction: 'vertical',
    //     afterMove: function (index) {
    //         if (index > 2) {
    //             $(".whatsapp").hide()
    //         } else {
    //             $(".whatsapp").show()
    //         }
    //     },
    //     responsiveFallback: function(){
    //         return $(window).outerWidth() < 768
    //     },
    // });

    function toggleSidebar() {
        $("#sidebar_toggler").toggleClass("close");
        $(".sidebar").toggleClass("collapsed");
        if ($(window).outerWidth() < 768) {
            $("#sidebar_toggler_mobile").toggleClass("hidden");
        }
    }

    $("#sidebar_toggler, #sidebar_toggler_mobile").on("click tap", function() {
        toggleSidebar();
    });

    $('#gallery').slick({
        rows: 2,
        slidesPerRow: 3,
        arrows: false,
        dots: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 768,
                settings: {
                    rows: 1,
                    slidesPerRow: 1,
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    arrows: true,
                    prevArrow: '<button type="button" class="slick-prev slick-arrow">←</button>',
                    nextArrow: '<button type="button" class="slick-next slick-arrow">→</button>',
                    dots: false,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    rows: 1,
                    slidesPerRow: 1,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true,
                    prevArrow: '<button type="button" class="slick-prev slick-arrow">←</button>',
                    nextArrow: '<button type="button" class="slick-next slick-arrow">→</button>',
                    dots: false,
                }
            }
        ],
    });

    $('#certificates').slick({
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true,
        prevArrow: '<button type="button" class="slick-prev slick-arrow">←</button>',
        nextArrow: '<button type="button" class="slick-next slick-arrow">→</button>',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 768,
                settings: {
                    rows: 1,
                    slidesPerRow: 1,
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    arrows: true,
                    prevArrow: '<button type="button" class="slick-prev slick-arrow">←</button>',
                    nextArrow: '<button type="button" class="slick-next slick-arrow">→</button>',
                    dots: false,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    rows: 1,
                    slidesPerRow: 1,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true,
                    prevArrow: '<button type="button" class="slick-prev slick-arrow">←</button>',
                    nextArrow: '<button type="button" class="slick-next slick-arrow">→</button>',
                    dots: false,
                }
            }
        ],
    });

    function adaptSlider() {
        let galleryImgHeight = $(".gallery-img").outerWidth();

        $(".gallery-img").css({
            "height": galleryImgHeight
        });
    }

    $(window).on("resize", function(){
        adaptSlider();
    });
    adaptSlider();

    $('.gallery-img').on('click tap', function () {
        if ($(window).width() < 768) {
            return false;
        }
        let bgImg = $(this).css('background-image');
        let src = bgImg.replace('url(', '').replace(')', '')
            .replace(/\"/gi, "");

        let image = new Image();
        image.src = src;
        image.style.width = "100%";
        image.onload = function () {
            $('#viewer').empty().append(image);
            $('#viewer').append("<div id='close_viewer'>×</div>");
        };
        image.onerror = function () {
            $('#viewer').empty().html("<div id='close_viewer'>×</div>" + 'That image is not available.');
        }


        let windowHeight = $(window).outerHeight() - 100;
        let width = (image.naturalWidth/image.naturalHeight) * windowHeight;

        $('#viewer').css({
            'width': width,
            'height': windowHeight,
        });

        $('#viewer img').attr('src', src);
        $("#viewer").fadeIn();
        $("#dark_bg").fadeIn();
    });

    $("#dark_bg").on("click", function () {
        $("#viewer, #dark_bg").hide();
    });

    $("body").on("click", "#close_viewer", function () {
        $("#viewer, #dark_bg").hide();
    });

    $(window).on('keyup', function (e) {
        if (e.which === 27) {
            $("#dark_bg").trigger("click");
        }
    });

    $(".sidebar-anchor").on("click", function (e){
        let id = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(id).offset().top
        }, 1000);
        e.preventDefault();
        return false;
    });

    $('.lightbox').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        speed: 1000,
        arrows: false,
        pauseOnHover: false,
    });

    $("#production_slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 1000,
        arrows: false,
        autoplaySpeed: 3000,
        autoplay: true,
    });
});
