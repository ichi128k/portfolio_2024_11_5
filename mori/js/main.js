
function clamp(a)
{
    if(a < 0)
    {
        a = 0;
    }
    else if(a > 50)
    {
        a = 50;
    }

    return a;
}

function calculateBlurVal(startY)
{
    const sv = $(this).scrollTop();
    var blurVal = clamp((sv - startY) / 10);
    blurVal = (50 - blurVal) / 50;

    return blurVal;
}

function update()
{
    /*
    const sv = $(this).scrollTop();
    const wiw = window.innerWidth;
    const wih = window.innerHeight;
    const mvOffset = 100;

    if(wiw > 900)
    {
        var blurValA1 = calculateBlurVal(wih + 50);
        var blurValA2 = calculateBlurVal(wih + 860);
        var blurValA3 = calculateBlurVal(wih + 1670);
        var blurValA4 = calculateBlurVal(wih + 2480);

        $("#about1 .p-about-details").css({"top": (-1000 * blurValA1 + 360) + "px"});
        $("#about2 .p-about-details").css({"top": (-1000 * blurValA2 + 430) + "px"});
        $("#about3 .p-about-details").css({"top": (-1000 * blurValA3 + 430) + "px"});
        $("#about4 .p-about-details").css({"top": (-1000 * blurValA4 + 430) + "px"});
    }
    else if(wiw > 600)
    {
        var blurValA1 = calculateBlurVal(wih + 160);
        var blurValA2 = calculateBlurVal(wih + 660);
        var blurValA3 = calculateBlurVal(wih + 1360);        
        var blurValA4 = calculateBlurVal(wih + 1860);        

        $("#about1 .p-about-details").css({"top": ""});
        $("#about2 .p-about-details").css({"top": ""});
        $("#about3 .p-about-details").css({"top": ""});
        $("#about4 .p-about-details").css({"top": ""});
    }
    else
    {
        var blurValA1 = calculateBlurVal(wih + 160);
        var blurValA2 = calculateBlurVal(wih + 1050);
        var blurValA3 = calculateBlurVal(wih + 1850);        
        var blurValA4 = calculateBlurVal(wih + 2750);        

        $("#about1 .p-about-details").css({"top": ""});
        $("#about2 .p-about-details").css({"top": ""});
        $("#about3 .p-about-details").css({"top": ""});
        $("#about4 .p-about-details").css({"top": ""});
    }

    //about1
    $("#about1 .about-blur_filter").css({"backdrop-filter":"blur(" + 20 * blurValA1 + "px)"});
    $("#about1 .heading-about").css({"left": (-300 * blurValA1) + "px"});
    //$("#about1 .p-about-details").css({"right": (-600 * blurValA1) + "px"});

    //about2
    $("#about2 .about-blur_filter").css({"backdrop-filter":"blur(" + 20 * blurValA2 + "px)"});
    $("#about2 .heading-about").css({"right": (-300 * blurValA2) + "px"});
    //$("#about2 .p-about-details").css({"left": (-600 * blurValA2) + "px"});

    //about3
    $("#about3 .about-blur_filter").css({"backdrop-filter":"blur(" + 20 * blurValA3 + "px)"});
    $("#about3 .heading-about").css({"left": (-300 * blurValA3) + "px"});
    //$("#about3 .p-about-details").css({"right": (-600 * blurValA3) + "px"});

    //about4
    $("#about4 .about-blur_filter").css({"backdrop-filter":"blur(" + 20 * blurValA4 + "px)"});
    $("#about4 .heading-about").css({"right": (-300 * blurValA4) + "px"});
    */

    
    /* 
    //Map
    if(sv < wih - mvOffset)
    {
        $("header").addClass("mvmode");
        $(".to-the-top").removeClass("open");
    }
    else
    {
        $("header").removeClass("mvmode");
        $(".to-the-top").addClass("open");
    }
    */
}

$(function()
{
    $(document).ready(function()
    {
        update();
    });

    $(window).scroll(function()
    {
        update();
    });

    //最新ニュース　アニメーション
    $(".ul-latestnews").on("inview",
    function(event, isInView)
    {
        if(isInView)
        {
            //On Enter
            $(this).addClass("show");
        }
        else
        {
            //On Exit
            $(this).removeClass("show");
        }
    });

    //Aboutセクション　アニメーション
    $("#about1, #about2, #about3, #about4").on("inview",
    function(event, isInView)
    {
        if(isInView)
        {
            //On Enter
            $(this).addClass("open");
        }
        else
        {
            //On Exit
            $(this).removeClass("open");
        }
    });

    //お客様の声 アニメーション
    $(".container-voice").on("inview",
    function(event, isInView)
    {
        if(isInView)
        {
            //On Enter
            $(this).addClass("open");
        }
        else
        {
            //On Exit
            $(this).removeClass("open");
        }
    });

    //to-the-top header 表示
    $("#mv").on("inview",
    function(event, isInView)
    {
        if(isInView)
        {
            //On Enter
            $("header").addClass("mvmode");
            $(".to-the-top").removeClass("open");
            
        }
        else
        {
            //On Exit
            $("header").removeClass("mvmode");
            $(".to-the-top").addClass("open");
        }
    });

    //Slick メインビジュアル
    $(".slicked").slick({
        arrows:false,
        autoplay: true,
        autoplaySpeed: 3000,
        centerMode: true,
        centerPadding: '0%',
        dots:false,
        fade: true,
        slidesToShow: 1,
        swipe: false,

        responsive: 
        [{
            breakpoint: 900,
            settings: 
            {

            }
        }]
    });

    //Slick お客様の声
    $(".slicked-voices").slick({
        arrows:true,
        autoplay: true,
        autoplaySpeed: 3000,
        centerMode: true,
        centerPadding: '0%',
        dots:true,
        fade: true,
        slidesToShow: 1,
        swipe: true,

        responsive: 
        [{
            breakpoint: 900,
            settings: 
            {

            }
        }]
    });

    //ハンバーガーメニュー
    $(".hamburger").on('click', function()
    {
        $("header").toggleClass("open");
        $(".nav-header").toggleClass("open");
        $(".hamburger").toggleClass("open");
        $("header .container-sns").toggleClass("open");
    });

    //ハンバーガーメニューを閉じる動作
    $(".close_menu").on('click', function()
    {
        $("header").removeClass("open");
        $(".nav-header").removeClass("open");
        $(".hamburger").removeClass("open");
        $("header .container-sns").removeClass("open");
    });

    //SNSボタン
    $(".sns-toggle").on('click', function()
    {
        $(".container-sns").toggleClass("open-desktop");
    });

    //最上部移動ボタン
    $(".to-the-top").on('click', function()
    {
        $(window).scrollTop(0);
    });
});