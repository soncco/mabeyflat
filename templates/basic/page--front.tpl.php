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
  <section class="welcome">
    <div class="wrapper">
      <div class="pure-u-3-8">
        <?php print render($page['welcome_text']); ?>
      </div>
      <div class="pure-u-5-8">
        <div class="welcome-slider">
          <?php print render($page['welcome_slider']); ?>
        </div>
      </div>
    </div>
  </section>
</div>

<div class="pure-g-r window">
  <section class="hotel-title">
    <div class="wrapper">
      <div class="pure-u-3-8">
        <h1>
          <a href="">Hotel Mabey<span class="hotel-name cusco">Cusco</span></a>
        </h1>
      </div>
      <div class="pure-u-5-8">
        <nav class="pure-menu pure-menu-open pure-menu-horizontal pure-menu-simple">
          <?php print render($page['menu_cusco']); ?>
        </nav>
      </div>
    </div>
  </section>
  <section class="hotel-front cusco">
    <div class="wrapper">
      <div class="pure-u-1-2">
        <div class="hotel-image cusco home-padding">
          <?php print render($page['foto_cusco']); ?>
        </div>
      </div>
      <div class="pure-u-1-2">
        <div class="hotel-text home-padding">
          <?php print render($page['texto_cusco']); ?>
        </div>
      </div>
    </div>
  </section>
</div>

<div class="pure-g-r window">
  <section class="hotel-title">
    <div class="wrapper">
      <div class="pure-u-3-8">
        <h1>
          <a href="">Hotel Mabey<span class="hotel-name valle">Urubamba</span></a>
        </h1>
      </div>
      <div class="pure-u-5-8">
        <nav class="pure-menu pure-menu-open pure-menu-horizontal pure-menu-simple">
          <?php print render($page['menu_urubamba']); ?>
        </nav>
      </div>
    </div>
  </section>
  <section class="hotel-front valle">
    <div class="wrapper">
      <div class="pure-u-1-2">
        <div class="hotel-image valle home-padding">
          <?php print render($page['foto_urubamba']); ?>
        </div>
      </div>
      <div class="pure-u-1-2">
        <div class="hotel-text home-padding">
          <?php print render($page['texto_urubamba']); ?>
        </div>
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
