jQuery(document).ready(function() {
  (function($) {
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
  })(jQuery); //end jquery function
}); //end document ready
