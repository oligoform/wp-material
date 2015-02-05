<div class="jumbotron jumbo text-center">

  <div class="jumbo-container">

  <div class="page-header">
  <h1>
  <?php echo roots_title(); ?>
  </h1>
  </div>
  <div class="jumbo-container-text text-left text-page row">
  <?php the_content(); ?>

  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>

  <?php comments_template('/templates/comments.php'); ?>

  </div>
  </div>
  </div>
  <nav class="post-nav">
  </nav>

