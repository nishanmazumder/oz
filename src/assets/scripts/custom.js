$(document).ready(function () {
    $('.slck').slick({
        slidesToShow: 5,
        slidesToScroll: 3,
        speed: 3000,
        responsive: [{

            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                infinite: true
            }

        }, {

            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                //dots: true
            }

        }, {

            breakpoint: 300,
            settings: "unslick" // destroys slick

        }],
        arrows: true
    });
});