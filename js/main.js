(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();

    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 2) {
            $('.sticky-top').addClass('bgNavColor');
            $('.navbar-nav a').addClass('textChangeColor');
            $('.dropdown a').addClass('textChangeColor');
            $('.d-inline-flex a').addClass('textChangeColor');
            $('.logo-img').addClass('dark_logo');
            $('.back-to-top').addClass('opacity-0');
        } else {
            $('.sticky-top').removeClass('bgNavColor');
            $('.navbar-nav a').removeClass('textChangeColor');
            $('.dropdown a').removeClass('textChangeColor');
            $('.d-inline-flex a').removeClass('textChangeColor');
            $('.logo-img').removeClass('dark_logo');
            $('.back-to-top').removeClass('opacity-0');
        }

    });




    /*active nav-link*/
    const langButtons = document.querySelectorAll("[data-btn]");
    const allLangs = ["ua", "en"];
    const currentPathName = window.location.pathname;
    let currentLang =
        localStorage.getItem("language") ||  "ua";



// Вешаем обработчики на каждую кнопку
    langButtons.forEach((a) => {
        a.addEventListener("click", (event) => {
            if (!event.target.classList.contains("active")) {
                currentLang = event.target.dataset.btn;
                localStorage.setItem("language", event.target.dataset.btn);
                resetActiveClass(langButtons, "active");
                a.classList.add("active");
            }
        });
    });

// Сброс активного класса у переданного массива элементов
    function resetActiveClass(arr, activeClass) {
        arr.forEach((elem) => {
            elem.classList.remove("active");
        });
    }

// Проверка активной кнопки
    function checkActiveLangButton() {
        switch (currentLang) {
            case "ua":
                document
                    .querySelector('[data-btn="ua"]')
                    .classList.add("active");
                break;
            case "en":
                document
                    .querySelector('[data-btn="en"]')
                    .classList.add("active");
                break;

            default:
                document
                    .querySelector('[data-btn="ua"]')
                    .classList.add("active");
                break;
        }
    }
    checkActiveLangButton();




    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 680) {
            $('.header').fadeIn('slow');
        } else {
            $('.header').fadeOut('slow');
        }
    });
    $('.header').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });

/*slideshow*/
    $ = jQuery;
    $( document ).ready(function() {

        $h_slider_options =  {
            gallery: true,
            item: 1,
            loop:true,
            slideMargin: 0,
            thumbItem: 6,
            galleryMargin: 10,
            thumbMargin: 10,
        };

        $v_slider_options = {
            gallery: true,
            item: 1,
            loop:true,
            slideMargin: 0,
            thumbItem: 6,
            galleryMargin: 10,
            thumbMargin: 10,
            vertical: true
        };

        h_slider = $('#lightSlider').lightSlider($h_slider_options);
        v_slider = $('#lightSliderVertical').lightSlider($v_slider_options);

        $selector = '#lightSlider li:not(".clone") a';
        $selector += ',#lightSliderVertical li:not(".clone") a';
        $().fancybox({
            selector : $selector,
            backFocus : false,
            buttons : [
                'slideShow',
                'share',
                'zoom',
                'fullScreen',
                'thumbs',
                'download',
                'close'
            ]
        });
    });

    $( window ).resize(function() {
        slider.destroy();
        h_slider = $('#ocassions-slider').lightSlider(h_slider_options);
    });




    // Modal Video
    var $videoSrc;
    $('.btn-play').click(function () {
        $videoSrc = $(this).data("src");
    });
    console.log($videoSrc);
    $('#videoModal').on('shown.bs.modal', function (e) {
        $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
    })
    $('#videoModal').on('hide.bs.modal', function (e) {
        $("#video").attr('src', $videoSrc);
    })


    // Project and Testimonial carousel
    $(".project-carousel, .testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        margin: 25,
        loop: true,
        center: true,
        dots: false,
        nav: true,
        navText : [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ],
        responsive: {
			0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });
    
})(jQuery);

