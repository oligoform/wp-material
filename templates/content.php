<div class="container">
  <?php while (have_posts()) : the_post(); ?>


  <article <?php post_class(); ?>>

  <div class="jumbotron jumbo text-center">

  <header class="jumbo-container">

  <h1 class="entry-title">

  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

  </h1>

  <?php get_template_part('templates/entry-meta'); ?>

  </header>

  <div class="mg-image">
  <a href="<?php the_permalink(); ?>">
  <?php the_post_thumbnail('full', array('class' => 'image-home box-shadow')); ?>
  </a>
  </div>

  <div class="jumbo-container-text text-left text-page">
  <?php
  global $more;    // Declare global $more (before the loop).
$more = 0;       // Set (inside the loop) to display content above the more tag.
the_content('<br/> <button class="md-raised md-primary md-button md-default-theme" ng-transclude="">Read more</button>');
echo '</div>';
?>


  </div>

  </article>

  <?php endwhile; ?>
    </div>
    <nav class="post-nav">

    <?php next_posts_link(__('<md-button class="md-raised nav-left">&larr; Older posts</md-button>')); ?>
    <?php previous_posts_link(__('<md-button class="md-raised nav-right">Newer posts &rarr; </md-button>')); ?>

    </nav>
