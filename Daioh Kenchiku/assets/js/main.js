
$(function()
{
    $(".hamburger").on("click", function()
    {
        $(".hamburger").toggleClass("open");
        $("nav").toggleClass("open");
    });

    
    $(".ul-slider").slick(
        {
            autoplay: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            centerMode: true,
            centerPadding: '20%',
            dots: true,
            arrows: false,
                        
            responsive: [
                {
                    breakpoint: 900,
                    settings: {
                        centerPadding: '10%',
                    }
                }
            ]
        }
    );
});

