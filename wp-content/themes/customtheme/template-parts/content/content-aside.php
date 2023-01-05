<h3><a href="<?= get_permalink($id);?>">
ASIDE <?= the_title(); ?>
</a></h3>
    <small>Posted on <?= the_time('F j,Y') ?> at <?= the_time('g:i a') ?> <?= the_category(); ?></small>
    <p><?= the_content(); ?></p>
<hr>