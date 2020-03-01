<?php get_header() ?>

Categories Template
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
<?php get_footer() ?>