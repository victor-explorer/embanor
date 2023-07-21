$(window).on('load resize orientationchange', function () {
  $('.carousel-products').each(function () {
      var $carousel = $(this);

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

  $('.carousel-gallery').each(function () {
      var $carousel = $(this);

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
    var $carousel = $(this);

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
                adaptiveHeight: true
            });
        }
    }
});
})