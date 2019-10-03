$('.banner-slick').slick({
  arrows: false,
  dots: true,
  infinite: true,
  speed: 500,
  fade: true,
  dots: true,
  cssEase: 'linear',
  autoplay: true,
  autoplaySpeed: 6000,
  responsive: [{
      breakpoint: 1200,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        autoplay: true,
        arrows: false,
        autoplaySpeed: 1000
      }
    }
  ]
});


$('.multiple-items').slick({
  infinite: true,
  slidesToShow: 5,
  dots: true,
  arrows: false,
  slidesToScroll: 3,
  responsive: [{
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
  responsive: [{
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

// detslle
$(document).ready(function () {
  // Select the first tab by default

  $("#vertical_tab_nav > ul > li > a")
    .eq(0)
    .addClass("active");
  $("#vertical_tab_nav > div > article")
    .eq(0)
    .css("display", "block");

  // This assigns an onclick event to each tab link("a" tag) and passes a parameter to the showHideTab() function

  $("#vertical_tab_nav > ul").click(function (e) {
    if ($(e.target).is("a")) {
      /*Handle Tab Nav*/
      $("#vertical_tab_nav > ul > li > a").removeClass("active");
      $(e.target).addClass("active");

      /*Handles Tab Content*/
      var clickeindex = $("a", this).index(e.target);
      $("#vertical_tab_nav > div > article").css("display", "none");
      $("#vertical_tab_nav > div > article")
        .eq(clickeindex)
        .fadeIn();
    }

    $(this).blur();
    return false;
  });
}); //end ready

/* Accordian */
$(".tab_heading").click(function () {
  $("article").hide();
  var activeTab = $(this).attr("rel");
  $("#" + activeTab).slideDown();

  $(".tab_heading").removeClass("active");
  $(this).addClass("active");

  $("ul.tabs li a").removeClass("active");
  $("ul.tabs li a[rel^='" + activeTab + "']").addClass("active");
});