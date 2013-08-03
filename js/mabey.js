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

      // Figures.
      $as = $('.collage a');

      $figure = $('<figure></figure>').addClass('image-wrapper');
      
      $as.each(function() {
        caption = $(this).find('img').attr('title');
        $(this).attr('title', caption);
        $(this).wrap($figure.clone().data('caption', caption));
        console.log(caption);
      });

      // Colorbox.
      $('.collage a').colorbox({
        'rel': 'gal',
        'maxWidth': '80%',
        'maxHeight': '90%'
      });

      // Collage.
      $('.collage').collagePlus({
        'fadeSpeed'     : 2000,
        'targetHeight'  : 200,
        'effect'        : 'effect-4',
        'direction'     : 'vertical'
      });

      $('.collage').collageCaption();

      var resizeTimer = null;
      $(window).bind('resize', function() {
        $('.collage .image-wrapper').css("opacity", 0);
        if (resizeTimer) clearTimeout(resizeTimer);
        resizeTimer = setTimeout(collage, 200);
      });

    }
  };
})(jQuery);