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
  slidesToScroll: 3
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