<!--This page is made to list blog posts-->
<?php get_header();?>
<div class="container">
    <div>
      <h1><?php if(is_category()) {
      	single_cat_title();
      }
      if(is_author()){
      	echo "Posts by "; the_author();
      } ?></h1>
      <div>
        <p><?php the_archive_description(); ?></p>
      </div>
    </div>  
  </div>

<!-- Blog Posts go here -->
<div class="container">
	<?php
		while(have_posts()){
			the_post(); ?>
			<div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
      			<div class="thumbnail"> <img src="<?php the_field('post_thumbnail') ?>" alt="Thumbnail Image 1" class="img-responsive">
       			<div class="caption">
          			<h3><?php echo wp_trim_words( get_the_title(), 4); ?></h3>
          			<p><?php the_excerpt(); ?></p>
                <p>Posted by <?php the_author_posts_link()?> on <?php the_time('n.j.y'); ?> in <?php echo get_the_category_list(', ')?></p>
          			<p><a href="<?php the_permalink() ?>" class="btn btn-primary" role="button">Read More</a></p>
        		</div>
      		</div>
      </div>
 <?php }?>
<!-- Pagination -->
<nav class="text-center" style="align-content: center">
  <ul class="pagination">
        <li><?php echo paginate_links();?></li>
  </ul>
</nav>
</div>
<?php get_footer();?>