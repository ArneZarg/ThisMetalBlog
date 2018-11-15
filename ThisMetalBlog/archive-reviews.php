<!-- This Page is for the Archive of Reviews -->
<?php get_header(); ?>

<div class="container">
    <div>
      <h1><?php if(is_category()) {
      	single_cat_title();
      }
      if(is_author()){
      	echo "Posts by "; the_author();
      } ?></h1>
      <hr>
      <div>
        <p><?php the_archive_description(); ?></p>
      </div>
    </div>  
</div>

<!-- Custom Query to paginate the review page when there's more than 9 posts -->
<?php $reviewArchive = new WP_Query(array(
	'paged' => get_query_var('paged', 1),
    'post_type' => 'reviews',
    'posts_per_page' => 9
  )); ?>

<!-- The Review Post Section -->
<div class="container">
<h2 class="text-center" style="color: black">REVIEWS</h2>
	<hr>
  <div class="row">
    <?php while($reviewArchive->have_posts()) { echo $reviewArchive->the_post(); ?>
    <div class="col-lg-4 col-md-6">
      <div class="media-object-default">
        <div class="media">
          <div class="media-left"> <a href="<?php the_permalink()?>"> <img class="media-object" src="<?php echo the_field('review_post_thumbnail') ?>" alt="placeholder image"> </a> </div>
          <div class="media-body">
            <h4 class="media-heading"><?php the_title(); ?></h4>
            <?php echo wp_trim_words(get_the_excerpt(), 20); ?></div>
        </div>
      </div>
    </div>
  <?php } 
    wp_reset_postdata();
  ?>
  </div>

<!-- Pagination Section -->
<nav class="text-center" style="align-content: center">
  <ul class="pagination">
        <li><?php echo paginate_links(array(
        	'total' => $reviewArchive->max_num_pages));?></li>
  </ul>
</nav>
</div>

<?php get_footer(); ?>