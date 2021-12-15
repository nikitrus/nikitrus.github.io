$(document).ready(function(){
    $('.carousel').slick({
      speed: 1000,
      fade: true,
      infinite: true,
      prevArrow: '<button type="button" class="slick-prev"><img src="img/left.png"></button>',
      nextArrow: '<button type="button" class="slick-next"><img src="img/right.png"></button>',
      responsive: [
        {
          breakpoint: 768,
          settings: {
            dots: true,
            arrows: true,
          
          }
        }
      ]
    });
  });