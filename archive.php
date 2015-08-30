<?php get_header(); ?>

<?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$args = array(
							'post_type' => 'post',
							'posts_per_page'=> '4',
							'paged' => $paged
						);
						$the_query = new WP_Query($args);

						$pages = $wp_query -> max_num_pages;
						$pages = intval($pages);
						$nextPage = intval($paged + 1);
						$prevPage = intval($paged - 1);

						$showNext = ($nextPage <= $pages);
						$showPrev = ($paged - 1 != 0);
	?>
<!--archive.php-->
<div class="main">
	<h1 class="big-heading pad-left">Archive.php, a list of posts</h1>

	<?php if (have_posts() ) : while ($the_query -> have_posts() ) : $the_query -> the_post(); ?>

		<?php get_template_part('content','blogTeaser');?>
	<?php endwhile; ?>
	<?php endif; ?>
</div>

<div class="sidebar">
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>