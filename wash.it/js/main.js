$(function()
{
    $(window).on("scroll",
    function()
    {
        $(".container-to_the_top").addClass("open");
    });

    $(".ul-slider-mv").slick(
    {
        autoplay: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: false,
        dots: true,
        arrows: false,
        fade: true,
        swipe: false,
        autoplaySpeed: 2000,
        
        responsive: [
            {
                breakpoint: 900,
                settings: {

                }
            }
        ]
    });
    $(".container-slider-voices").slick(
        {
            autoplay: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            centerMode: false,
            dots: false,
            arrows: true,
            fade: false,
            swipe: false,
            autoplaySpeed: 2000,
            
            responsive: [
                {
                    breakpoint: 900,
                    settings: {
    
                    }
                }
            ]
        });

    $(".fadein_bottom, .fadein_side").on("inview",
    function(event, isInView)
    {
        if(isInView)
        {
            //On Enter
            $(this).addClass("play");
        }
        else
        {
            //On Exit
            $(this).removeClass("play");
        }
    });

    $(".details-close").on("click",
    function()
    {
        $(this).parent().parent().removeAttr("open");
    });

    //To-the-top button
    $(".container-to_the_top").on("click", function()
    {
        $(window).scrollTop(0);
    });

    //Open Window Button
    $(".button-openwindow").on("click", function()
    {
        $("body").addClass("modal");
    });

    //Close button Window
    $(".img-button-close").on("click", function()
    {
        $("body").removeClass("modal");
    });
});