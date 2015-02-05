<div class="entry-meta">
  <a href="<?php the_permalink(); ?>">
  <time class="updated" datetime="<?php echo get_the_time('c'); ?>"><?php echo get_the_date(); ?></time>
  </a>,
<?php
  $category = get_the_category();
echo '<a class="text-center category-color" href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
?>
  </div>
