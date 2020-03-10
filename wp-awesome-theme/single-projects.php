<?php get_header() ?>
<h4><?php echo  get_post_meta($post->ID, 'project_name', true) ?></h4>
<div class='row'>

	<div class='col-lg-8'>
		<?php if(has_post_thumbnail()):?> 
			<img src=<?php the_post_thumbnail_url('blog-large')?>  alt="<?php the_title() ?>" class='img-fluid mb-3 img-thumbnail' />
		<?php endif; ?>
		<p><?php the_field('description') ?></p>
	</div>

	<div class='col-lg-4'>
		<ul>
			<!-- the_field(custom_field_name) is from acf plugin to replace get_post_meta -->
			<li><?php the_field('project_name') ?></li>
		</ul>
	</div>


</div>

<?php get_footer() ?>