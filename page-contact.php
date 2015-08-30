<?php get_header();?>
<!-- page-contact.php -->
<div class="main">
  <div class="article">
    <h1 class="">Contact</h1>


    <?php
      if ( have_posts() ) : while ( have_posts() ) : the_post();
          //the actual post content

          the_content();

          endwhile;
      endif;
    ?>
    <!-- good place to put mailchimp or something -->



  </div>




</div>

<div class="sidebar">
  <?php include ('sidebar.php'); ?>
</div>

<?php get_footer();?>