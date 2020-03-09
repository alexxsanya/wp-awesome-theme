
	<div class="post"> 

        <!-- Display the Title as a link to the Post's permalink. -->

        <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

        <!-- Display the Post's content in a div box. -->

        <div class="entry">
        <pre>
            <?php echo get_post_meta('project_name').'....'; ?>
        </pre>
        </div>

        <?php 
            $tags = get_the_tags();
            if($tags):
        ?>


        <?php 
                foreach($tags as $tag):
        ?>
            <a href="<?php echo get_tag_link($tag->term_id) ?>" class='badge badge-success'>
                <?php echo $tag->name; ?>
            </a>

        <?php endforeach;endif; ?>
</div>