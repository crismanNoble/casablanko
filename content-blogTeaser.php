<!-- content-blogTeaser.php -->
<div class="blog-teaser">
  <?php
  if ( has_post_thumbnail() ) {
    //the featured image
    the_post_thumbnail('full', array('class' => 'post-preview-image'));
  }
  echo '<h2>';
  the_title();
  echo '</h2>';
  echo '<div class="blog-preview-content">';
  the_excerpt();
  echo '</div>';

  echo '<a href="'.get_permalink().'">Read More</a>';

?>
</div>