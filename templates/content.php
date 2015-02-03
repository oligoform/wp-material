<div class="container text-page content-post">
    <article <?php post_class(); ?>>
  <header>
    <h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary text-page">
    <?php the_excerpt(); ?>
  </div>
</article>
  </div>
