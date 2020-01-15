jQuery(document).ready(function() {
  (function($) {
    ///////////////////////// Move the content up by the height of the navbar object for a transparent nav effect ////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    if ($(window).width() <= 667) {
      $("#page-wrapper").css("margin-top", "0");
    }

    $(".woof_redraw_zone").css({ opacity: "1" });
  })(jQuery); //end jquery function
}); //end document ready
