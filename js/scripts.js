// Boton de subir
$(document).ready(function() {

    $('.subir').click(function() {
        $('body, html').animate({
            scrollTop: '0px'
        }, 500);
    });

    $(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
            $('.subir').fadeIn(500);
            
        } else {
            $('.subir').fadeOut(500);
            
        }
    });


//Slider Aliados
$('#aliados_slide').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
});

});
