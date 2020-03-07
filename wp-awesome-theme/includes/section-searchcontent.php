<?php if( have_posts() ) : ?>
	<?php while( have_posts() ) : the_post() ?>
		<h2>
            <a href='<?php the_permalink() ?>'><?php the_title() ?></a>
        </h2>
		<div class="content">
			<?php the_content() ?>
		</div>
	<?php endwhile ?>
<?php else : ?>
	<p>Oh No, there are no content matching the search term  <b><?php echo get_search_query(); ?></b>!</p>
<?php endif ?>