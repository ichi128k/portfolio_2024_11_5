$(function(){
  viewModeToggleWidth = 900;
  mobileOpen = false;
  $(".hamburger").on("click",
  function()
  {
    mobileOpen = !mobileOpen;
    $(".hamburger").toggleClass("open");
    if(mobileOpen)
    {
      $("header nav").animate({
        "left":"0px"
      },200);
    }
    else
    {
      $("header nav").animate({
        "left":"100vw"
      },200);
    }
  });

  mobileBar = false;

  $(window).resize(function()
  {
    if(window.innerWidth > viewModeToggleWidth)
    {
      if(mobileBar)
      {
        $("header nav").css({
          "top":"0px",
          "left":"auto",
          "right":"200px"
        })
        mobileBar = false;
      }
    }
    else
    {
      //On Mobile
      //open属性出ないのに下に垂れるバグ
      if(!mobileBar)
      {
        $("header nav").css({
          "left":"100vw"
        })
        
        $("header nav").removeClass("fixed-bar");

        mobileBar = true;
        mobileOpen = false;
        $(".hamburger").removeClass("open");
      }
    }
  });

  $(window).scroll(function()
  {
    const scrollY = $(window).scrollTop();
    if(scrollY > window.innerWidth * 0.2)
    {
      $("header").css({"background-color":"#ffff"});
    }
    else
    {
      $("header").css({"background-color":"#fff0"});
    }
  });
  
});
  