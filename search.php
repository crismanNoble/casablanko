<?php get_header();?>
<div class="main">
  <?php if ( have_posts() ) : ?>
  <h1 class="big-heading pad-left">
    <?php printf( __( 'Search Results for: %s', 'twentyten' ), '<span>' . get_search_query() . '</span>' ); ?>
  </h1>
  <div class="search-results">
    <?php
          $args = array(
            'post_type' => 'post',
            'posts_per_page'=> '10'
          );
          $the_query = new WP_Query($args);

           if ( have_posts() ) : while ( have_posts() ) : the_post();
           get_template_part('content','blogTeaser');
           endwhile;
           endif;
           ?>
  </div>

  <?php else : ?>
  <h1 class="big-heading pad-left">
    <?php printf( __( 'No results for %s', 'twentyten' ), '<span>' . get_search_query() . '</span>' ); ?>
  </h1>
    <?php get_search_form(); ?>
  <?php endif;?>

</div>

  <div class="sidebar">
    <?php get_sidebar(); ?>
  </div>

<?php get_footer();?>