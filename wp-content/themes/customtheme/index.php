<!-- Including header.php -->
<?= get_header() ?>
    
    <div class="container">

        <?php
        if (have_posts()) {
            while (have_posts()):the_post(); ?>
                 <!-- Reading the posts -->
                 <?=var_dump(get_post_format())?>
                 <?php
                    if(get_post_format()){
                        get_template_part('template-parts/content/content', get_post_format());
                    }
                    else{
                        get_template_part('template-parts/pages/page',get_page_uri());
                    }
                ?>
        <?php
            endwhile;
        }
        ?>

    </div>

<!-- Including footer.php -->
<?= get_footer() ?>
