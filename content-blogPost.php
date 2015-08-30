  <?php

    echo '<!-- content-blogPost.php -->';
    echo '<h1>';
    the_title();
    echo '</h1>';

    if ( has_post_thumbnail() ) {
      //the featured image
      the_post_thumbnail('full', array('class' => 'post-image'));
    }


    echo '<div class="post-content">';
    the_content();
    echo '<p>';




    ?>