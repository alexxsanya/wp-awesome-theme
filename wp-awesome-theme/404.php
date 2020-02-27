<?php get_header() ?>

<?php 
    if(is_admin_bar_showing() ) {
        echo 'dashboard admin is shown';
    }
?>
404 Template
<p>The Content you are looking for doesn't exist</p>

<?php get_footer() ?>