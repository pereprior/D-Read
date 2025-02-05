$(function() {
    
    $('.promo-carousel').slick({
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 6000,      
        nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>',
        prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>'
    });

    $('.books-carousel').on('init', function(event, slick){
        $('.slick-slide').not('.slick-active').addClass('slick-inactive');
    });
    
    $('.books-carousel').on('beforeChange', function(event, slick, currentSlide, nextSlide){
        $('.slick-slide').removeClass('slick-active').addClass('slick-inactive');
        $('.slick-slide[data-slick-index="' + nextSlide + '"]').removeClass('slick-inactive').addClass('slick-active');
    });
    
    $('.books-carousel').slick({
        centerMode: true,
        variableWidth: true,
        centerPadding: '60px',
        slidesToShow: 3,
        nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>',
        prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });

});