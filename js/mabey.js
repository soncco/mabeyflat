(function($) {
  Drupal.behaviors.mabeyflat = {
    attach: function (context) {
      
      $('.bxslider', context).bxSlider({
        pager: false,
        captions: true
      });

      $().UItoTop({ easingType: 'easeOutQuart' });
    }
  };
})(jQuery);