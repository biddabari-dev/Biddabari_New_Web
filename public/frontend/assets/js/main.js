// ----------------- Single slick slide start ------------//
$(document).ready(function () {
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
});
$(document).ready(function () {
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
});

$(document).ready(function () {
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
            arrows: false
          }
        }
      ]
  });
});

// $('.variable-width').slick({
//     dots: true,
//     infinite: true,
//     speed: 300,
//     slidesToShow: 1,
//     centerMode: true,
//     variableWidth: true
//   });

//   $(document).ready(function(){
//     $('.variable-width').slick({
//       dots: true,
//       infinite: true,
//       speed: 300,
//       slidesToShow: 1,
//       slidesToScroll: 1,
//       autoplay: true,
//       centerMode: true,
//       variableWidth: true,
//       adaptiveHeight: true,
//     });

//     // Click on the slide to go to the next one
//     $('.variable-width').on('click', '.slick-slide', function() {
//       $('.variable-width').slick('slickNext');
//     });
//   });

$(document).ready(function () {
  $(".variable-width").slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 3, // Show 3 full slides
    slidesToScroll: 1, // Scroll one slide at a time
    centerMode: true, // Center the active slide
    variableWidth: true, // Enable variable width for slides
    initialSlide: 0, // Start with the first slide
    arrows: true, // Enable next/previous arrows
    responsive: [
      {
        breakpoint: 1024, // Adjust settings for screens less than 1024px
        settings: {
          slidesToShow: 2, // Show 2 slides
          slidesToScroll: 1,
          centerMode: true,
          variableWidth: true,
        }
      },
      {
        breakpoint: 768, // Adjust settings for screens less than 768px
        settings: {
          slidesToShow: 1, // Show 1 slide
          slidesToScroll: 1,
          centerMode: true,
          variableWidth: true,
        }
      }
    ]
  });
});


// ----------------- Single slick slide end ------------//
