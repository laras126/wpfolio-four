( function($) {

  $(document).ready( function() {

    // Fade in home page image when it is loaded

    // http://stackoverflow.com/questions/3877027/jquery-callback-on-image-load-even-when-the-image-is-cached

    $('.wpf-home-image').on('load', function() {
      // Image has loaded
    }).each(function() {
      // Fade in image
      if(this.complete) $(this).load().animate({'opacity':1}, 1000);
    });

  });

} )(jQuery);
