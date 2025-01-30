$(function() {
    
    $('.myCarrousel').slick({
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true,
        nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>',
        prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>'
    });

});