(function($) {
  Drupal.behaviors.mabeyflat = {
    attach: function (context) {
      
      // Responsive Slider.      
      $('.bxslider', context).bxSlider({
        pager: false,
        captions: true
      });

      // Scroll to top.
      $().UItoTop({ easingType: 'easeOutQuart' });

      // Forms.
      $('form').addClass('pure-form pure-form-aligned');
      $('.form-item').addClass('pure-control-group');
      $('.form-type-checkbox').removeClass('pure-control-group').addClass('pure-controls');
      $('.form-actions').addClass('pure-controls');
      $('.form-actions input[type=submit]').addClass('pure-button pure-button-primary');

      $textarea = $('.form-textarea-wrapper textarea').clone();
      $('.form-textarea-wrapper').remove();
      $textarea.appendTo('.form-type-textarea');
      $textarea.appendTo('.webform-component-textarea');

      $('.element-invisible').remove();
      $selects = $('.webform-container-inline select');
      $('.webform-component-date').append($selects);
      $wfci = $('.webform-container-inline');
      $wfci.remove();

    }
  };
})(jQuery);