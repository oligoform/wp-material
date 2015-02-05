<?php

  /**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */

  function optionsframework_option_name() {

  // This gets the theme name from the stylesheet (lowercase and without spaces)
  $themename = get_option( 'stylesheet' );
  $themename = preg_replace("/\W/", "_", strtolower($themename) );

  $optionsframework_settings = get_option('optionsframework');
  $optionsframework_settings['id'] = $themename;
  update_option('optionsframework', $optionsframework_settings);

  // echo $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 */

function optionsframework_options() {

  // Background Defaults
  $background_defaults = array(
    'color' => '#eee',
    'image' => '',
    'repeat' => 'no-repeat',
    'position' => 'center',
    'attachment'=>'center fixed' );

  $color_combos = array(
    'indigo' => __( 'Indigo', 'theme-textdomain' ),
    'teal' => __( 'Teal', 'theme-textdomain' ),
    'deeppurple' => __( 'Deep purple', 'theme-textdomain' ),
    'blue' => __( 'Blue', 'theme-textdomain' ),
    'bluegrey' => __( 'Blue grey', 'theme-textdomain' ),
    'brown' => __( 'Brown', 'theme-textdomain' ),
    'green' => __( 'Green', 'theme-textdomain' ),
    'cyan' => __( 'Cyan', 'theme-textdomain' ),
    'pink' => __( 'Pink', 'theme-textdomain' ),
    'darkgrey' => __( 'Dark grey', 'theme-textdomain' )
  );

  $options = array();

  $options[] = array(
    'name' => __('General', 'wpmaterials'),
    'type' => 'heading');

  $options[] = array(
    'name' => __('Favicon', 'wpmaterials'),
    'desc' => __('Favicon for your website.', 'wpmaterials'),
    'id' => 'wpmaterials_favicon_uploader',
    'type' => 'upload');

  $options[] = array(
    'name' => __( 'Color combo', 'theme-textdomain' ),
    'desc' => __( 'Radio select with default options "one".', 'theme-textdomain' ),
    'id' => 'color_combo',
    'std' => 'indigo',
    'type' => 'radio',
    'options' => $color_combos
  );

  $options[] = array(
    'name' =>  __('Background', 'options_check'),
    'desc' => __('Change the background CSS.', 'options_check'),
    'id' => 'wpmaterials_background',
    'std' => $background_defaults,
    'type' => 'background' );

  $options[] = array(
    'name' => __('Footer Credentials', 'wpmaterials'),
    'desc' => __('Customize message in the footer here.', 'wpmaterials'),
    'id' => 'wpmaterials_footer',
    'std' => 'Theme: Wp-Materials  by <a href="http://blog.webaddicts.pl" rel="nofollow" title="webaddicts.pl wordpress themes" target="_blank">webaddicts.pl</a>',
    'type' => 'textarea');

  $options[] = array(
    'name' => __('Advanced', 'wpmaterials'),
    'type' => 'heading');

    $options[] = array(
    'name' => __('Adjust your logo image position', 'wpmaterials'),
    'desc' => __('This CSS will overwrite margin-top of the logo class. Example: 10px,-10px.', 'wpmaterials'),
    'id' => 'wpmaterials_logo_margin',
    'std' => '0px',
    'type' => 'text');

      $options[] = array(
    'name' => __('Color of sticky post class', 'wpmaterials'),
    'desc' => __('This CSS will overwrite color of your sticky post class.', 'wpmaterials'),
    'id' => 'wpmaterials_sticky_color',
    'std' => '#ff9800',
    'type' => 'color');

  $options[] = array(
    'name' => __('Enter your custom CSS styles', 'wpmaterials'),
    'desc' => __('This CSS will overwrite the CSS of style.css file.', 'wpmaterials'),
    'id' => 'wpmaterials_custom_css',
    'std' => '',
    'type' => 'textarea');

  $options[] = array(
    'name' => __('Help', 'wpmaterials'),
    'type' => 'heading');

  $options[] = array(
    'name' => __('Info:', 'wpmaterials'),
    'desc' => __('Wp-materials WordPress theme is designed and developed by <a href="http://webaddicts.pl" target="_blank">WebAddicts</a> team.', 'wpmaterials'),
    'type' => 'info');

    $options[] = array(
    'name' => __('Support:', 'wpmaterials'),
    'desc' => __('You can find some helpfull resources at <a href="http://blog.webaddicts.pl/support/" target="_blank">blog.webaddicts.pl/support/</a>, also, feel free to ask questions by comments using this site.', 'wpmaterials'),
    'type' => 'info');

    $options[] = array(
    'name' => __('Contact:', 'wpmaterials'),
    'desc' => __('We are looking forward to feedback, e-mail us at: biuro[@]webaddicts.pl', 'wpmaterials'),
    'type' => 'info');

  return $options;
}
?>
