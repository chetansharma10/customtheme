<?= get_header() ?>

    <?php
    if (have_posts()) {
        while (have_posts()) : the_post(); ?>
            <h3><?= the_title(); ?></h3>
            <small>Posted on <?= the_time('F j,Y')?> at <?= the_time('g:i a')?>  <?= the_category(); ?></small>
            <p><?= the_content();?></p>
            <hr>
    <?php
        endwhile;
    }
    ?>
<?= get_footer() ?>