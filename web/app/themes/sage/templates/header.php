<header class="banner">
    <nav class="navbar navbar-default">
    <div class="container">
      <div class="col-sm-1 home">
        <a href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
      </div>
      <div class="col-sm-11">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        </div>
        <?php
          if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav']);
        endif;
        ?>
      </div>

    </div>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <img src="<?php bloginfo('template_url'); ?>/assets/images/comp-logo.png" alt="beach">
        </div>
        <div class="col-sm-8 right-nav">
          <nav class="navbar">
            <?php
              if (has_nav_menu('secondary_navigation')) :
              wp_nav_menu(['theme_location' => 'secondary_navigation', 'menu_class' => 'nav navbar-nav right-nav']);
            endif;
            ?>
          </nav>
      </div>
    </div>
  </div>
</header>
  <?php get_template_part('templates/banner', 'page'); ?>
  <?php get_template_part('templates/form', 'page'); ?>
  <?php get_template_part('templates/featured', 'page'); ?>
  <?php get_template_part('templates/region', 'page'); ?>
  <?php get_template_part('templates/places', 'page'); ?>
  <?php get_template_part('templates/events', 'page'); ?>
