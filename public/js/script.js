$(document).ready(function(){

    var flag = false;
    var scroll;
    $(window).scroll(function(){
        scroll = $(window).scrollTop();
        if(scroll > 200){
            if(!flag){
                $("nav").css({ "background-color": "rgba(255, 255, 255, 0.9)"});
                $(".navbar-light .navbar-nav .nav-link ").css({"color":"black"});
                $('.logo-nav-white').addClass('logo-nav-black');
                $('.logo-nav-black').removeClass('logo-nav-white');
                flag =true;
            }
        }else{
            if(flag){
                $("nav").css({"background-color":"rgba(255, 255, 255, 0.9)"});
                $(".navbar-light .navbar-nav .nav-link ").css({"color":"white"});
                $('.logo-nav-black').addClass('logo-nav-white');
                $('.logo-nav-white').removeClass('logo-nav-black');
                flag =false;
            }
        }
    });
});  