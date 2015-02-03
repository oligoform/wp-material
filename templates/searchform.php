<form role="search" method="get" class="search-form form-inline" action="<?php echo esc_url(home_url('/')); ?>">



  <md-input-container >

  <label><?php _e('Search for:', 'roots'); ?></label>


  <input type="search" value="<?php echo get_search_query(); ?>" name="s" class="search-field form-control" required>


  </md-input-container>
  <md-button type="submit" class="search-submit" ><?php _e('Search', 'roots'); ?>
  </md-button>
  </form>
