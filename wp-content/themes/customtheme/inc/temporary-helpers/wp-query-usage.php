<?php
        $args = [
            'type' => 'post',
            'posts_per_page' => 1,
            'order' => 'DESC',
            'orderby' => 'post_date',
        ];
        $lastBlog = new WP_Query($args);
        /**
         * WP_Query is a class that deals with db,which results ease in customization of filtering 
         * posts,etc by order,post_type
         */
?>


<div class="col-md-8 bg-light">
    <?php
        if ($lastBlog->have_posts()) {
            while ($lastBlog->have_posts()) : $lastBlog->the_post(); ?>
                <!-- Reading the posts -->
                <?php
                if (get_post_format()) {
                    get_template_part('template-parts/content/content', get_post_format());
                } else {
                    get_template_part('template-parts/pages/page', get_page_uri());
                }
    ?>

    <?php
        endwhile;
    }

    wp_reset_postdata();

    ?>
</div>