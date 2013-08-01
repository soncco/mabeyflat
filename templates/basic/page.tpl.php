<div class="pure-g-r window">
  <header class="header">
    <div class="wrapper">
      <div class="pure-u-1-5 logo">
        <h1><a href="<?php print $front_page; ?>"><img src="<?php print $logo; ?>" alt="<?php print $site_name; ?>"></a></h1>
      </div>
      <div class="pure-u-4-5 relative">
        <div class="langs">
          <?php print render($page['langs']); ?>
        </div>
        <nav class="pure-menu pure-menu-open pure-menu-horizontal pure-menu-mabey">
          <?php print render($page['main_nav']); ?>
        </nav>
      </div>
    </div>
  </header>
</div>

<div class="pure-g-r window">
  <section class="inner-title">
    <div class="wrapper">
      <div class="pure-u-1">
        <?php print render($title_prefix); ?>
        <?php if ($title): ?>
        <h1><?php print $title; ?></h1>
        <?php endif; ?>
        <?php print render($title_suffix); ?>
      </div>
    </div>
  </section>
</div>

<div class="pure-g-r window">
  <figure class="inner-image">
    <?php print render($page['inner_picture']) ?>
  </figure>
</div>

<div class="pure-g-r window">
  <section class="content">
    <div class="wrapper">
      <div class="pure-u-1">
        <?php print $messages; ?>
        <?php print render($tabs); ?>
        <?php print render($page['help']); ?>
        <?php print render($page['content']); ?>
      </div>
    </div>
  </section>
</div>

<div class="pure-g-r window">
  <footer class="footer">
    <div class="wrapper">
      <div class="pure-u-1-4">
        <?php print render($page['footer_first']) ?>
      </div>
      <div class="pure-u-1-4">
        <?php print render($page['footer_second']) ?>
      </div>
      <div class="pure-u-1-4">
        <?php print render($page['footer_third']) ?>
      </div>
      <div class="pure-u-1-4">
        <div class="quick-contact">
          <?php print render($page['footer_fourth']) ?>
        </div>
      </div>
    </div>
    <div class="footer-last text-center">
      <div class="wrapper">
        <div class="pure-u-1">
          <nav>
            <?php print render($page['footer']) ?>
          </nav>
        </div>
      </div>
    </div>
  </footer>
</div>

<?php print render($page['extras']) ?>
