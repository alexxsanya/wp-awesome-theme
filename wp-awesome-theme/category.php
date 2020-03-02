<?php get_header() ?>

Categories Template

<div class='row'>
    <div class='col-lg-8'>
        <?php get_template_part('includes/section', 'archive') ?>

		<!-- first ofrm of paginations -->
		<!-- <?php previous_posts_link() ?>
		<?php next_posts_link() ?> -->

		<!-- send for of pagination -->
		<?php 
			global $wp_query;

			$big = 9999999999; // need an unlikely number
			echo paginate_links( array(
				'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
				'format' => '?page=%#%',
				'current' => max(1, get_query_var('paged')),
				'total' => $wp_query->max_num_pages,
			));
		?>
    </div>
    <div class='col-lg-4'>
		<h4>Most Viewed </h4>
		<?php
			//add list of posts based on the visits tracking
			if (function_exists("awepop_popularity_list")) {
				awepop_popularity_list();
			}
		?>
    </div>

</div>

<?php get_footer() ?>