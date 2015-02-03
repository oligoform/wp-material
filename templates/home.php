<?php
  /*
Template Name: Home
*/
  ?>

  <?php while (have_posts()) : the_post(); ?>

  <?php the_content(); ?>

  </div>
  </div>
  <?php endwhile; ?>
    <?php

    if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
else { $paged = 1; }

$args = array(
  'posts_per_page' => 10,
  'paged' => $paged
);

query_posts($args);

$loop = new WP_Query( $args );


while ( $loop->have_posts() ) : $loop->the_post();
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 720,405 ), false, '' );

echo '  <div class="jumbotron jumbo text-center"><div class="title-bg jumbo-container"><h1>';
echo '<A href="';
the_permalink();
echo '">';
the_title();
echo '</a></h1><h4>';
echo '<time class="updated text-center" datetime="';
echo get_the_time('c');
echo '">';
echo get_the_date();
echo '</time>';

$category = get_the_category();
if($category[0]){
  echo '<span class="text-center coma-padding">, </span>
  <a class="text-center category-color" href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
}


echo '</h4></div>';

if($src[0]){
  echo '<div class="mg-image"><A href="';
  the_permalink();
  echo '">';

  echo '<img class="responsiveimg image-home box-shadow" style="width:100%;" src="';
  echo $src[0];

  echo '"></a></div>';
}
echo '<br/>';

echo '<div class="jumbo-container-text text-left text-page">';
global $more;    // Declare global $more (before the loop).
$more = 0;       // Set (inside the loop) to display content above the more tag.
the_content('<br/> <button class="md-raised md-primary md-button md-default-theme" ng-transclude="">Read more</button>');
echo '</div>';

echo '</div>';
endwhile;?>

  <div class="nav-previous alignleft"><?php next_posts_link( 'Starsze posty' ); ?></div>
  <div class="nav-next alignright"><?php previous_posts_link( 'Nowsze posty' ); ?></div>

  </div>
  </div>
  </main>
