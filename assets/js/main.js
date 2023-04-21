jQuery(document).ready(function($) {
    let scrollSpeed = 700;
    $('#anchors a').click(function(event) {
        event.preventDefault(); 
        var id = $(this).attr('href');
        if (id !== '') {
            $('html, body').animate({
                scrollTop: $(id).offset().top
            }, scrollSpeed);
        }
    });

    // menu
    $('.header__btn-close').hide();
    $('.header__btn-open, .header__btn-close').click(function() {
      $('.menu').toggleClass('active');
      $('body').toggleClass('active');
      $('.header__btn-open, .header__btn-close').toggle();
    });

    // slider
    $('.slider-single').slick({
        arrows: true,
        dots: false,
        autoPlay: true,
        prevArrow: '<button type="button" class="slick-prev">PREV</button>',
        nextArrow: '<button type="button" class="slick-next">NEXT</button>',
    });

    $('.responsive').slick({
      arrows: false,
      dots:  true,
      infinite: false,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 2,
      responsive: [
        {
          breakpoint: 1503,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true, // скрываем точки, если слайдов меньше 4
          }
        },
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            infinite: true,
            dots:true,
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true
          }
        },
       
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });


   
  });