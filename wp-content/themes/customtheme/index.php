<?= get_header() ?>

    <?php
    if (have_posts()) {
        while (have_posts()) : the_post(); ?>
          
            <!-- Add Custom Post Feature Image -->
            <div class='post-image'><?= the_post_thumbnail('thumbnail') ?></div>
            
            <!-- Post Format -->
            <h3><?= get_post_format(); ?></h3>

            <!-- Get Template Part helps to read a custom conten.php -->
            <h3><?= get_template_part('content'); ?></h3>

            <!-- It will look content-aside.php -->
            <h3><?= get_template_part('content',get_post_format()); ?></h3>

     
    <?php
        endwhile;
    }
    ?>
<?= get_footer() ?>