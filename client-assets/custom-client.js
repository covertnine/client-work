jQuery(document).ready(function() {
  (function($) {
    console.log("sick");
    ///////////////////////// Move the content up by the height of the navbar object for a transparent nav effect ////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    if ($(window).width() <= 667) {
      $("#page-wrapper").css("margin-top", "0");
    }

    //collapse the mega menu sub navs in the products menu for small screens
    if ($(window).width() <= 568) {
      $(
        ".mega-sub-menu .mega-sub-menu .mega-sub-menu > .mega-menu-item:not('.widget_custom_html')"
      ).addClass("hide");
      $(
        ".mega-sub-menu .mega-sub-menu .mega-sub-menu > .widget_custom_html > .mega-block-title"
      ).on("click", function() {
        console.log("clicks ya bitches");
        $(this)
          .parent()
          .nextAll()
          .toggleClass("hide");
      });
    }

    //bouncing arrow
    $(window).scroll(function() {
      //scroll position variable
      var scroll = $(window).scrollTop();

      if (scroll >= 68) {
        $(".bouncing-arrow").fadeOut();
      }
      if (scroll <= 67) {
        $(".bouncing-arrow").fadeIn();
      }
    }); //end bouncing arrow

    $('.woof_redraw_zone').css({"opacity": "1"});
  })(jQuery); //end jquery function
}); //end document ready
