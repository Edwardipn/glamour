$(document).ready(function(){
    var flag = false;
    var scroll;
    $(window).scroll(function(){
        scroll = $(window).scrollTop();
        if(scroll > 200){
            if(!flag){
                $(header).css({"background-color":});
                flag =true;
            }
        }else{
            if(flag){
                $("header").css({"background-color":"transparent"});
                flag =false;
            }
        }
    });
});