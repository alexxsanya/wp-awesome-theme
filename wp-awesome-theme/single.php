<?php get_header() ?>


<?php if(has_post_thumbnail()):?> 
	<img src=<?php the_post_thumbnail_url('blog-large')?>  alt="<?php the_title() ?>" class='img-fluid mb-3 img-thumbnail' />
<?php endif; ?>

<?php get_template_part('includes/section', 'blogcontent') ?>

<?php wp_link_pages() // to link pages with multiple page breaks?>

<?php get_footer() ?>