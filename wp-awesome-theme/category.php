<?php get_header() ?>

<!-- Categories Template -->

<div class='row'>
    <div class='col-lg-8'>
        <?php get_template_part('includes/section', 'archive') ?>

		<!-- first form of paginations of <prev next> -->
		<?php previous_posts_link() ?>
		<?php next_posts_link() ?>

		<!-- second form of pagination of 1,2 Next >> -->
		<?php 
			// global $wp_query;

			// $big = 9999999999; // need an unlikely number
			// echo paginate_links( array(
			// 	'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
			// 	'format' => '?page=%#%',
			// 	'current' => max(1, get_query_var('paged')),
			// 	'total' => $wp_query->max_num_pages,
			// ));
		?>
    </div>
    <div class='col-lg-4'>
	    <?php if(is_active_sidebar('blog_sidebar')):?>
			<?php dynamic_sidebar('blog_sidebar')?>
	    <?php endif?>
		<h5>Most Viewed </h5>
		<?php
			//add list of posts based on the visits tracking
			if (function_exists("awepop_popularity_list")) {
				awepop_popularity_list();
			}
		?>
    </div>

</div>

<?php get_footer() ?>