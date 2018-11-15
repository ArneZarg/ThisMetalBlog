<!--
This page is for single blog posts
 -->
<?php get_header(); ?>
<div class="container">
	<hr>
	<!-- Grab the info from the text post -->
    <h2 class="text-center" style="color: black"><?php the_title(); ?></h2>
    <!-- Grab the image -->
    <img class="img-responsive" src="<?php the_field('post_banner'); ?>">
    <!-- Grab the author's info and the post content -->
    <h4>Posted by <?php the_author_posts_link()?> on <?php the_time('n.j.y'); ?> in <?php echo get_the_category_list(', ')?></h4>
    <p><?php the_content(); ?></p>
    <p><a href="<?php echo site_url('/blog') ?>">Back to Blogs</a></p>
</div>
<?php get_footer(); ?>