(function ($) {
    "use strict"

    $(".variable-width").slick({
      dots: true,
      infinite: true,
      speed: 3000,
      slidesToShow: 3, // Show 3 full slides
      slidesToScroll: 1, // Scroll one slide at a time
      centerMode: false, // Remove centering
      arrows: true, // Enable next/previous arrows
      autoplay: true, // Enable auto slide
      autoplaySpeed: 3000, // Set speed for auto slide (2 seconds)

      responsive: [
          {
              breakpoint: 1024, // Adjust settings for screens less than 1024px
              settings: {
                  slidesToShow: 3, // Show 2 slides
                  slidesToScroll: 1,
              },
          },
          {
              breakpoint: 768, // Adjust settings for screens less than 768px
              settings: {
                  slidesToShow: 2, // Show 1 slide
                  slidesToScroll: 1,
              },
          },
      ],
  });

    $(".free-course-banner").slick({
        dots: true,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        adaptiveHeight: true,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 2000,
        prevArrow:
          '<button type="button" class="slick-prev"><i class="fa fa-arrow-left"></i></button>',
        nextArrow:
          '<button type="button" class="slick-next"><i class="fa fa-arrow-right"></i></button>',
      });

      $(".book-banner").slick({
        dots: true,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        adaptiveHeight: true,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 2000,
        prevArrow:
          '<button type="button" class="slick-prev"><i class="fa fa-arrow-left"></i></button>',
        nextArrow:
          '<button type="button" class="slick-next"><i class="fa fa-arrow-right"></i></button>',
      });

      $(".blog-slide").slick({
        dots: true,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        adaptiveHeight: true,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 2000,
        prevArrow:
          '<button type="button" class="slick-prev"><i class="fa fa-arrow-left"></i></button>',
        nextArrow:
          '<button type="button" class="slick-next"><i class="fa fa-arrow-right"></i></button>',
        responsive: [
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
              dots: true,
              arrows: false,
            },
          },
        ],
      });


})(jQuery)