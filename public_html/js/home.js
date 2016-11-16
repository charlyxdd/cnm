$(function(){
    $( "#tabs" ).tabs();
    $('#cboDeperture').datepicker();
    $('#cboReturn').datepicker();
});

$(document).ready(function(){
    var owl1=$('#1');
    var owl2=$('#2')
    owl1.owlCarousel({
        loop: true,
        autoplay:true,
        items:1
    });

    owl2.owlCarousel({
        loop: true,
        autoplay:true,
        items:1
    });


    $('#fotosContainer>div').hide();
    $('#' + $('#cboOpciones').val()).show();

    $( "#cboOpciones" ).on( "change", function() {
        $('#fotosContainer>div').hide();
        $('#' + $(this).val()).show();
    });

});
