var contador=1;
$(document).ready(function(){
    setInterval(cargarAnimacionBanner,3000);
    $('.tour').children('span').hide();

    $('.tour').hover(function(){
        $(this).children('span').slideDown('fast');
    },function(){
        $(this).children('span').slideUp('fast');
    });

    $('.tour').click(function(){
       window.locationf="tour/" + $(this).children('span').html();
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
