$(document).ready(function () {
    $('.testiSlider').slick({
        infinite: true,
        arrows: false,
        dots: true,
        autoplay: false,
        speed: 1000,
        centerMode: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        fade: false,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
        ]

    });
    $('.roomCardSlider').slick({
        infinite: true,
        arrows: true,
        dots: false,
        autoplay: false,
        speed: 1100,
        // centerPadding: false,
        centerMargin: false,
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        fade: false,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 575,
                settings: {
                    centerPadding: false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
        ]

    });
    $('[data-fancybox="gallery"]').fancybox({
        hash : true
    })
     $('.mainSlider').slick({
         infinite: true,
        // slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        slide: '> div',
        // fade: true,
    });
      
    AOS.init();
});

