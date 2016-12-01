var contador=1;
$(document).ready(function(){
    setInterval(cargarAnimacionBanner,3000);
    if($(window).width()>800)
        $('.tour').children('span').hide();

    $('.tour').hover(function(){
        if($(window).width()>800)
            $(this).children('span').slideDown('fast');
    },function(){
        if($(window).width()>800)
            $(this).children('span').slideUp('fast');
    });

    $('.tour').click(function(){
       location.href="tour/" + encodeURI($(this).children('span').html());
    });

});

function cargarAnimacionBanner(){

    $('#bannerContainer').removeClass('banner' + contador);
    if(contador<5){
        contador++;
    }
    else{
       contador=1;
    }
    $('#bannerContainer').addClass('banner' + contador);
}
