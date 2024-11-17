(function ($) {
    "use strict";

    // Initialize Slick slider
    $(".variable-width").slick({
        dots: false,
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
                },
            },
            {
                breakpoint: 768, // Adjust settings for screens less than 768px
                settings: {
                    slidesToShow: 2, // Show 1 slide
                },
            },
        ],
    });

    $(".free-course-banner").slick({
        dots: false,
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
        dots: false,
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

    $(".home-course-category-slider").slick({
        dots: false,
        infinite: true,
        arrows: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    initialSlide: 2,
                    arrows: false,
                    dots: true,
                },
            },

            {
                breakpoint: 425,
                settings: {
                    slidesToShow: 2,
                    arrows: false,
                    dots: true,
                },
            },
        ],
    });

    $(".student-review-slider").slick({
        dots: false,
        speed: 3000,
        slidesToShow: 3, // Show 3 full slides
        slidesToScroll: 1, // Scroll one slide at a time
        arrows: true, // Enable next/previous arrows
        autoplay: true, // Enable auto slide
        autoplaySpeed: 3000, // Set speed for auto slide (2 seconds)
        responsive: [
            {
                breakpoint: 1024, // Adjust settings for screens less than 1024px
                settings: {
                    slidesToShow: 3, // Show 2 slides
                },
            },
            {
                breakpoint: 768, // Adjust settings for screens less than 768px
                settings: {
                    slidesToShow: 2, // Show 1 slide
                    arrows: false,
                    dots: true,
                },
            },
            {
                breakpoint: 425, // Adjust settings for screens less than 768px
                settings: {
                    slidesToShow: 1,
                },
            },
        ],
    });
})(jQuery);
