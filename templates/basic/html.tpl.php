<!DOCTYPE html>
<html>
  <head>
    <title><?php print $head_title; ?></title>
    <meta name="viewport" content="width=device-width">
    <?php print $head; ?>
    <?php print $styles; ?>
  </head>
  <body class="<?php print $classes; ?>" <?php print $attributes;?>>
    <?php print $page_top; ?>
    <?php print $page; ?>
    <?php print $page_bottom; ?>
  </body>
  <?php print $scripts; ?>
</html>