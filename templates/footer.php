<footer class="content-info " role="contentinfo">
  <div class="footer-bg">
  <div class="container">


  <div class="col-md-3">
  <?php dynamic_sidebar('sidebar-footer-1'); ?>
  </div>
  <div class="col-md-3">
  <?php dynamic_sidebar('sidebar-footer-2'); ?>
  </div>
  <div class="col-md-3">
  <?php dynamic_sidebar('sidebar-footer-3'); ?>
  </div>
  <div class="col-md-3">
  <?php dynamic_sidebar('sidebar-footer-4'); ?>
  </div>
  <?php
  if(of_get_option('wpmaterials_footer')){
  echo'

  <div class="col-md-12 credits">
';
  echo of_get_option('wpmaterials_footer', 'Theme: Wp-Materials  by <a href="http://blog.webaddicts.pl" rel="nofollow" title="webaddicts.pl wordpress themes" target="_blank">webaddicts.pl</a>');
  echo'

  </div>';
};
?>
  </div>

  </div>

  </footer>

