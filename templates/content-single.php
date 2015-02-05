
<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
  <div class="jumbotron jumbo text-center article-text">


  <h1 class="entry-title"><?php the_title(); ?></h1>
  <div class="text-page">
  <?php get_template_part('templates/entry-meta'); ?>
  <div class="jumbo-container-text text-left text-page">
  <hr>
  <div class="row">
  <?php the_content(); ?>
  </div>
  </div>
  <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>

  <?php comments_template('/templates/comments.php'); ?>
  </div>
  </article>


  <?php endwhile; ?>

    <nav class="post-nav">

    <?php next_posts_link(__('<md-button class="md-raised nav-left">&larr; Older posts</md-button>')); ?>
    <?php previous_posts_link(__('<md-button class="md-raised nav-right">Newer posts &rarr; </md-button>')); ?>

    </nav>
