<?php
  /**
 * Roots includes
 *
 * The $roots_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/roots/pull/1042
 */
  $roots_includes = array(
  'lib/utils.php',           // Utility functions
  'lib/init.php',            // Initial theme setup and constants
  'lib/wrapper.php',         // Theme wrapper class
  'lib/sidebar.php',         // Sidebar class
  'lib/config.php',          // Configuration
  'lib/activation.php',      // Theme activation
  'lib/titles.php',          // Page titles
  'lib/nav.php',             // Custom nav modifications
  'lib/gallery.php',         // Custom [gallery] modifications
  'lib/scripts.php',         // Scripts and stylesheets
  'lib/extras.php',          // Custom functions
);

foreach ($roots_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'roots'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

/*
 * Helper function to return the theme option value. If no value has been saved, it returns $default.
 * Needed because options are saved as serialized strings.
 *
 * This code allows the theme to work without errors if the Options Framework plugin has been disabled.
 */

if ( !function_exists( 'of_get_option' ) ) {
  function of_get_option($name, $default = false) {

    $optionsframework_settings = get_option('optionsframework');

    // Gets the unique option id
    $option_name = $optionsframework_settings['id'];

    if ( get_option($option_name) ) {
      $options = get_option($option_name);
    }

    if ( isset($options[$name]) ) {
      return $options[$name];
    } else {
      return $default;
    }
  }
}

/*
 * Custom Header Codes
 */
add_action( 'wp_head', 'wpmaterials_custom_header_code' );
function wpmaterials_custom_header_code() {

  // Output favicon image
  $favicon = of_get_option('wpmaterials_favicon_uploader');
  if ( ! empty( $favicon ) ) {
    echo '<link id="favicon" rel="shortcut icon" href="' . $favicon . '" sizes="16x16 32x32 48x48" type="image/png">';
  }

  // Output custom CSS
  $custom_css = of_get_option( 'wpmaterials_custom_css' );

  $primary_color = of_get_option( 'primary_color' );

  $color_combo = of_get_option('color_combo');
  $sidebar = of_get_option('sidebar_turn');

  $margin_logo = of_get_option('wpmaterials_logo_margin');


  switch ($color_combo) {
    case indigo:
    $primary_color = '#3f51b5';
    break;
    case teal:
    $primary_color = '#009587';
    break;
    case deeppurple:
    $primary_color = '#673ab7';
    break;
    case blue:
    $primary_color = '#2196f3';
    break;
    case bluegrey:
    $primary_color = '#607d8b';
    break;
    case brown:
    $primary_color = '#795548';
    break;
    case green:
    $primary_color = '#4caf50';
    break;
    case cyan:
    $primary_color = '#00bcd4';
    break;
    case pink:
    $primary_color = '#e91e63';
    break;
    case darkgrey:
    $primary_color = '#333';
    break;

  }

  $sticky = of_get_option('wpmaterials_sticky_color');

  $link_hover_color = of_get_option( 'link_hover_color' );
  $menu_hover_color = of_get_option( 'menu_hover_color' );

  $footer = of_get_option('wpmaterials_footer');
  ?>


    <style type="text/css">
    <?php
    echo '/* Custom CSS */' . "\n";
  echo $custom_css . "\n";
  echo "
  md-toolbar.md-default-theme {
  background-color: ".  $primary_color .";
}
#menu-primary-navigation > li> a {
  color: ".  $primary_color .";
}

.sticky > div > header{
  background-color:". $sticky ."!important;
}

html{
 background-color: ".  $primary_color .";
}

.logo{
margin-top:" . $margin_logo .";
}

a, a:hover, a:focus {
  color: ".  $primary_color .";
}

.open > ul > li > a:hover {
  color: ".  $primary_color .";
}

body{
  background-color: ".  $primary_color .";
  }

  footer .footer-bg {
  background-color: ".  $primary_color ."; color:white;
  }

  article header{
  background-color: ".  $primary_color .";
  }

  .md-primary {
    background-color: ".  $primary_color ." !important;
    }

    .separator{
    background-color: ". $primary_color .";
    }

  .navbar,
  .navbar-default  {
  background-color: ".  $primary_color ." !important;
  }";
  ?>

    <?php $background = of_get_option('wpmaterials_background');

  if ($background) {
    if ($background['image']) {
      echo '.bg {
      background:url('.$background['image'].') '.' '. $background['color'] .' '. $background['repeat'] .' '. $background['position'] .' '. $background['attachment'] .'; background-size:cover;
      };';
    }
    else
    {
      echo '.bg {
      background-color:'.$background['color'].
        '}';
    }
  };
  ?>

    </style>
    <?php
}


/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';



/**
 * Load Opitons Framework.
 */
if ( !function_exists( 'optionsframework_init' ) ) {
  require get_template_directory() . '/inc/admin/options-framework.php';
}

/*
 * Loads the Options From Different Location as per themes requirement
 */
function wpmaterials_options_framework_location_override() {
  return array('/inc/options.php');
}
add_filter('options_framework_location','wpmaterials_options_framework_location_override');

require 'theme-updates/theme-update-checker.php';
$example_update_checker = new ThemeUpdateChecker(
	'wp-materials',                                            //Theme folder name, AKA "slug".
	'http://blog.webaddicts.pl/wp-materials/info.json' //URL of the metadata file.
);
