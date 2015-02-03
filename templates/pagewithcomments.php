<?php
  /*
Template Name: Page with comments
*/
  ?>
  <?php while (have_posts()) : the_post(); ?>
  <div class="page-header">
  <h1>
  <?php echo roots_title(); ?>
  </h1>
  </div>
  <div class="text-page">
  <?php the_content(); ?>


  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
  <?php comments_template('/templates/comments.php'); ?>
  </div>
  <?php endwhile; ?>





