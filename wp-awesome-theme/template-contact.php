<?php
    // Creating a template for contact & assign it to the contact page

    /*
    Template Name: Contact Us
    */
?>

<?php get_header('secondary') ?> 

<div class='row'>
    <div class='col-lg-8'>
        <?php get_template_part('includes/section', 'content') ?>
    </div>
    <div class='col-lg-4'>
        <div class="card-body d-flex flex-column align-items-center justify-content-center cover">

            <!-- Text -->
            <p class="text-center">
            More pages coming soon! Feel free to contact us with your ideas.
            </p>

            <!-- Button -->
            <a class="btn btn-primary btn-xs" href="mailto:plus.unvab@gmail.com">Contact Us</a>

        </div>
    </div>

</div>

<?php get_footer() ?>