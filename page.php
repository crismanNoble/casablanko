<?php get_header();?>
  <!--page.php-->
  <div class="main">

  <?php
  if ( have_posts() ) : while ( have_posts() ) : the_post();
        //the actual post content
    if ( has_post_thumbnail() ) {
          //the featured image
           $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');

        ?>
        <div class="full-bleed-image full-bleed-image-alt" style="background-image:url('<?php print($large_image_url[0]);?>')"></div>
        <?php
        }?>
        <div class="article">
        <?php
        the_content();
        ?></div><?php

        endwhile;
    endif;
    ?>


  </div>

  <div class="sidebar">
    <?php get_sidebar(); ?>
  </div>

<?php get_footer();?>