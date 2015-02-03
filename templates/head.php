<!doctype html>
  <html class="no-js" ng-app="app" <?php language_attributes(); ?>>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">

  <link href="//fonts.googleapis.com/css?family=Signika&subset=latin,latin-ext" rel="stylesheet" type="text/css">

  <!-- Angulars Material CSS using RawGit to load directly from `bower-material/master` -->
  <link rel="stylesheet" href="//rawgit.com/angular/bower-material/master/angular-material.css">


  <!-- Angular Material Dependencies -->
  <script src="//cdn.jsdelivr.net/hammerjs/2.0.4/hammer.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.6/angular.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.6/angular-animate.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.6/angular-aria.js"></script>
  <!-- Angular Material Javascript using RawGit to load directly from `bower-material/master` -->
  <script src="//rawgit.com/angular/bower-material/master/angular-material.js"></script>

  <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/controllers/sideNav.js"></script>

  <?php wp_head(); ?>
  </head>
