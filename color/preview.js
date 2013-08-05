
(function ($) {
  Drupal.color = {
    callback: function(context, settings, form, farb, height, width) {
      // Footer wrapper background.
      $('#preview .inner-title', form)
        .css('background-color', $('#palette input[name="palette[title]"]', form)
          .val());
    }
  };
})(jQuery);
