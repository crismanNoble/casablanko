<?php get_header();?>
  <!-- single.php -->
  <div class="main">
    <div class="article blog-content" data-temp="single.php">
      <?php
          echo '<h1>';
          the_title();
          echo '</h1>';

          if ( has_post_thumbnail() ) {
            //the featured image
            the_post_thumbnail('full', array('class' => 'post-image'));
          }


        if ( have_posts() ) : while ( have_posts() ) : the_post();
          //the actual post content
          echo '<p>';
          the_content();
          echo '<p>';
          endwhile;
        endif;

      ?>
    </div>
    <?php
        echo '<div class="blog-footer">';
        //next and previous links
        echo '<div class="blog-footer-left">';
        next_post_link('%link', '&laquo; Newer');
        echo '</div>';
        echo '<div class="blog-footer-right">';
        previous_post_link('%link', 'Older &raquo;');
        echo '</div>';
        echo '</div>';
    ?>
  </div>

  <div class="sidebar">
    <?php get_sidebar(); ?>
  </div>

<?php get_footer();?>