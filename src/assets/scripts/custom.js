$(document).ready(function () {
    $('.slck').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        speed: 3000,
        responsive: [{

            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                infinite: true
            }

        }, {

            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                //dots: true
            }

        }, {

            breakpoint: 300,
            settings: "unslick" // destroys slick

        }],
        arrows: true
    });
});