<?php
/*
    Template Name: Page no title
 */
get_header() 
?>

    <?php
    if (have_posts()) {
        while (have_posts()) : the_post(); ?>
            <p><?= the_content();?></p>
            <hr>
    <?php
        endwhile;
    }
    ?>
<?= get_footer() ?>