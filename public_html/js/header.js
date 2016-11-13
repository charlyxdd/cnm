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
});
