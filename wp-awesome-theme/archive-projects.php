<?php get_header() ?>

<!-- Categories Template -->
<h4>Our Projects</h4>
<div class='row'>
    <div class='col-lg-8'>
        <?php get_template_part('includes/section', 'project') ?>

		<!-- first form of paginations of <prev next> -->
		<?php previous_posts_link() ?>
		<?php next_posts_link() ?>

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