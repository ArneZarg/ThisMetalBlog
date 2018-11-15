<!-- This is for the a single review post

This page displays reviews.

 -->
<?php get_header(); ?>
<div class="container">
    <h2 class="text-center" style="color: black"><?php the_title(); ?></h2>
    <hr>
    <h4>Posted by <?php the_author_posts_link(); ?> on <?php the_time('n.j.y'); ?></h4>
    <img style=class="album-cover" src="<?php the_field('album_cover'); ?>">
    <p><?php the_content() ?></p>
    <p><a href="<?php echo esc_url(site_url('/reviews')) ?>">Back to Reviews!</a></p>
</div>
<?php get_footer(); ?>