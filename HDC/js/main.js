$(function()
{
    $(".hamburger").on("click",function()
    {
        $("nav").toggleClass("open");
    });
    $(window).resize(function()
    {
    });

    //Toggle Button
    $(".toggle-button-info").on("click",function()
    {
        $(".toggle-button-info").addClass("selected");
        $(".toggle-button-about").removeClass("selected");
        $(".table-info").addClass("open");
        $(".table-about").removeClass("open");
    });

    $(".toggle-button-about").on("click",function()
    {
        $(".toggle-button-info").removeClass("selected");
        $(".toggle-button-about").addClass("selected");
        $(".table-info").removeClass("open");
        $(".table-about").addClass("open");
    });
});