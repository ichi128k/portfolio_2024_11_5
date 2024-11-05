
$(function()
{
    $(".slider-mv").slick(
        {
            autoplay: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            centerMode: false,
            dots: false,
            arrows: false,
            fade: true,
            autoplaySpeed: 2000,
            
            responsive: [
                {
                    breakpoint: 900,
                    settings: {
                        
                    }
                }
            ]
        }
    );

    $(".slider-recommendation").slick(
        {   
            autoplay: false,
            slidesToShow: 4,
            slidesToScroll: 1,
            centerMode: true,
            dots: false,
            arrows: false,
            fade: false,
            responsive: [
                {
                    breakpoint: 900,
                    settings: {
                        autoplay: false,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        centerMode: true,
                        centerPadding: '10%',
                        dots: true,
                    }
                }
            ]
        }
    );
});

