<div class="bottom-navigation">
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="col-sm-12">
      
      <?php
      if (has_nav_menu('primary_navigation')) :
      wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav']);
      endif;
      ?>
      </div>
    </div>
  </nav>
</div>

<footer class="content-info">
  <div class="container">
    <div class="col-sm-6">
      <nav class="navbar">
        <?php
          if (has_nav_menu('footer_navigation')) :
          wp_nav_menu(['theme_location' => 'secondary_navigation', 'menu_class' => 'nav navbar-nav']);
        endif;
        ?>
      </nav>
    </div>
  </div>
</footer>
