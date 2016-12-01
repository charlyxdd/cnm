$(document).ready(function(){
    $('#cmdFb').hover(function(){
        $(this).children('img').attr('src',host + '/images/fbwhite.png');
    },function(){
        $(this).children('img').attr('src',host + '/images/fbblack.png');
    });

    $('#cmdTw').hover(function(){
        $(this).children('img').attr('src',host + '/images/twitterwhite.png');
    },function(){
        $(this).children('img').attr('src',host + '/images/twitterblack.png');
    });

    $(window).scroll(function(){
        if(parseInt($(window).width())>800) {
            if ($(window).scrollTop() >= 50) {
                $('#logoContainer a img').addClass('chico');
                $('#navContainer').addClass('chico');
            }
            else {
                $('#logoContainer a img').removeClass('chico');
                $('v#navContainer').removeClass('chico');
            }
        }
    });

    $('#cmdMenu').click(function(){
        if($(window).width()<800){
            if($('header nav').css('display')=='none'){
                $('header nav').slideDown('fast');
            }
            else{
                $('header nav').slideUp('fast');
            }
        }
    });

    $(window).resize(function(){
        if($(window).width()>782){
            $('header nav').show();
        }
        else{
            $('header nav').hide();
        }
    });
});
