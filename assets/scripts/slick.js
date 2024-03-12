$(window).on('load resize orientationchange', function () {
    $('.carousel-products').each(function () {
        let $carousel = $(this);

        if ($(window).width() > 768) {
            if ($carousel.hasClass('slick-initialized')) {
                $carousel.slick('unslick');
            }
        }

        else {
            if (!$carousel.hasClass('slick-initialized')) {
                $carousel.slick({
                    dots: true,
                    mobileFirst: true,
                    arrows: false,
                });
            }
        }
    });

    $('.carousel-products-slick').each(function () {
        let $carousel = $(this);

        $carousel.slick({
            dots: true,
            arrows: true,
            centerMode: true,
            centerPadding: '30px',
            slidesToShow: 3,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: false,
                        slidesToShow: 1
                    }
                }
            ]
        });


    });

    $('.carousel-pictures').each(function () {
        let $carousel = $(this);

        $carousel.slick({
            dots: false,
            arrows: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
        })
    })

    $('.carousel-gallery').each(function () {
        let $carousel = $(this);

        if ($(window).width() > 768) {
            if ($carousel.hasClass('slick-initialized')) {
                $carousel.slick('unslick');
            }
        }

        else {
            if (!$carousel.hasClass('slick-initialized')) {
                $carousel.slick({
                    dots: true,
                    mobileFirst: true,
                    arrows: false
                });
            }
        }
    });

    $('.carousel-topics').each(function () {
        let $carousel = $(this);

        $carousel.slick({
            dots: true,
            arrows: false,
            adaptiveHeight: true,
            arrows: true,
            centerMode: true,
            centerPadding: '30px',
            slidesToShow: 3,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: false,
                        slidesToShow: 1
                    }
                }
            ]
        });


    });
})