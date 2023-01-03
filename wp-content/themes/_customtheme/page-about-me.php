<?= get_header() ?>

    <?php
    if (have_posts()) {
        while (have_posts()) : the_post(); ?>
            <p><?= the_content();?></p>
            <h3><?= the_title(); ?></h3>
            <hr>
    <?php
        endwhile;
    }
    ?>
<?= get_footer() ?>