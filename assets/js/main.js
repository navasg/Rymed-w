$('.banner-slick').slick({
  arrows: false,
  dots: false,
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear',
  autoplay: true,
});

$('.multiple-items').slick({
  infinite: true,
  slidesToShow: 5,
  dots: true,
  arrows: false,
  slidesToScroll: 3,
  responsive: [
    {
      breakpoint: 997,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 500,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    },
  ]
});

$(function () {
  $('#Container-filter').mixItUp();
});

// wow = new WOW(
//   {
//     animateClass: 'animated',
//     mobile: false,
//     offset: 100,
//   }
// );
// wow.init();

$('.testimonies').slick({
  arrows: false,
  dots: false,
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear',
  autoplay: true,

});


$('.carousel-service').slick({
  arrows: true,
  dots: false,
  slidesToShow: 3,
  slidesToScroll: 1,
  infinite: false,
  responsive: [
    {
      breakpoint: 997,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 500,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    },
  ]
});