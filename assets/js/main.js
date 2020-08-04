(function ($) {
    "use strict";

    // Script for OffCanvas Menu Activation
    $(document).ready(function () {
        $(".burger").click(function() {
            $(this).toggleClass("activated");
            $('.mobile-menu-wrapper').toggleClass('show');
            $('body').toggleClass('overlay')
          });
    })


    // Script for hero-slider Activation
    $('.hero-slider-active').slick({
        dots: true,
        infinite: true,
        speed: 700,
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<button type="button" class="slick-prev"><i class="far fa-angle-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="far fa-angle-right"></i></button>',
        responsive: {
                breakpoint: 768,
                settings: {
                    arrows: true
                }
            }
    });

  // Script for Category Slider Activation
  $('.category-active').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 6,
    slidesToScroll: 1,
    arrows: false,
    prevArrow: '<button type="button" class="slick-prev"><i class="far fa-angle-right"></i></button>',
    nextArrow: '<button type="button" class="slick-next"><i class="far fa-angle-left"></i></button>',
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 4,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                dots: true
            }
        }
    ]
});

    // Script for Product Slider Activation
    $('.product-active').slick({
        dots: false,
        infinite: true,
        speed: 700,
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: '<button type="button" class="slick-prev"><i class="far fa-angle-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="far fa-angle-right"></i></button>',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,

                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    arrows: false
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false
                }
            }
        ]
    });



    // Script for Slick Slider Activation
    $('.responsive').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        prevArrow: '<button type="button" class="slick-prev"><i class="far fa-angle-right"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="far fa-angle-left"></i></button>',
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
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });



    // Script for Nice Select Activation 
    $(document).ready(function () {
        $('select').niceSelect();
    })


    // Script for Magnific Popup Activation 
    $(document).ready(function () {
        $('.iframe-link').magnificPopup({ type: 'iframe' });
    });



    // Script For Scroll to top Button
    $(document).ready(function () {
        var back = $('.back-to-top');
        back.on('click', function () {
            $('html, body').animate({
                scrollTop: 0,
            }, 900);
        })
        $(window).on('scroll', function () {
            var self = $(this),
                height = self.height(),
                top = self.scrollTop();
            if (top > height) {
                back.addClass('visible');
            } else {
                back.removeClass('visible');
            }
        })

    })


  
})(jQuery);	 // End line