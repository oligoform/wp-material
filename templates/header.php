<div ng-controller="AppCtrl" class="hidden-md hidden-lg">

  <md-sidenav class="md-sidenav-left md-whiteframe-z2" md-component-id="left">
  <md-toolbar class="md-theme-indigo">
  <h1 class="md-toolbar-tools">Navigation</h1>
  </md-toolbar>
  <md-content class="md-padding" ng-controller="LeftCtrl">

  <?php
  if (has_nav_menu('primary_navigation')) :
  wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new Roots_Nav_Walker(), 'menu_class' => 'nav navbar-nav'));
endif;
?>

  <br/>
  </md-content>
  </md-sidenav>
  </div>



  <header class="banner navbar navbar-default navbar-static-top" role="banner" style="z-index: 4;
min-height: 0px;
margin: 0px;
padding-bottom: 20px;">
  <div class="container">
  <div class="navbar-header">
  <div ng-controller="AppCtrl">

  <button ng-click="toggleLeft()"  type="button" class="navbar-toggle collapsed">
  <span class="sr-only">Toggle navigation</span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>

  </button>
  </div>
  <a class="navbar-brand " href='<?php echo esc_url( home_url( '/' ) ); ?>' title='WpMaterials' rel='home'>
  <?php if ( get_theme_mod( 'WpMaterials_logo' ) || get_theme_mod( 'WpMaterials_logo_text' ) ) : ?>
  <?php if ( 'image' == get_theme_mod( 'WpMaterials_logo_type' ) ) : ?>
  <img class="logo" src='<?php echo esc_url( get_theme_mod( 'WpMaterials_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
  <?php else : ?>
  <span><?php if(get_theme_mod( 'WpMaterials_logo_text')) { echo get_theme_mod( 'WpMaterials_logo_text'); } else { echo esc_attr( get_bloginfo( 'name', 'display' ) ); } ?></span>
  <?php endif; ?>
    <?php else : ?>
    <span><?php bloginfo( 'name' ); ?></span>
    <?php endif; ?>
      </a>
      </div>

      <nav class="collapse navbar-collapse" role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
      wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new Roots_Nav_Walker(), 'menu_class' => 'nav navbar-nav'));
endif;
?>
  </nav>
  </div>
  </header>

  <div class="separator"></div>


