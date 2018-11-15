<!-- The Website Header -->
<?php get_header(); ?>

<!-- The Initial Section -->
<div class="container" style="text-align: center">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <div class="row" style="align-items: center">
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2"><img class="img-circle" alt="Free Shipping" src="<?php echo get_theme_file_uri('images/icon.png'); ?>"></div>
        <div class="col-lg-6 col-md-9 col-sm-9 col-xs-9">
          <h4>Metal Blogs</h4>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <div class="row" style="align-items: center">
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2"><img class="img-circle" alt="Free Shipping" src="<?php echo get_theme_file_uri('images/icon.png'); ?>"></div>
        <div class="col-lg-6 col-md-9 col-sm-9 col-xs-9">
          <h4>Album Reviews</h4>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <div  class="row" style="align-items: center">
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2"><img class="img-circle" alt="Free Shipping" src="<?php echo get_theme_file_uri('images/icon.png'); ?>"></div>
        <div class="col-lg-6 col-md-9 col-sm-9 col-xs-9">
          <h4>Anything Metal!</h4>
        </div>
      </div>
    </div>
  </div>
  <hr>
</div>

<!-- Blog Posts Section

output blog info and excerpts

-->

<?php
//Keep it to 6 posts per page...
$blogPosts = new WP_Query(array(
  'posts_per_page' => 6
  ));
 ?>
<!-- Output it here -->
<h2 class="text-center" style="color: black">BLOG</h2>
<div class="container">
	<hr>
  <div class="row text-center">
    <?php while($blogPosts->have_posts()) { echo $blogPosts->the_post(); ?>
    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
      <div class="thumbnail"> <img src="<?php the_field('post_thumbnail') ?>" alt="Thumbnail Image 1" class="img-responsive">
        <div class="caption">
          <h3><?php echo wp_trim_words( get_the_title(), 4); ?></h3>
          <p><?php echo wp_trim_words(get_the_content(), 10); ?></p>
          <p><a href="<?php the_permalink(); ?>" class="btn btn-primary" role="button">Read More</a></p>
        </div>
      </div>
    </div>
    <?php } wp_reset_postdata(); ?>
  </div>
  
<!-- Pagination -->
<nav class="text-center">
  <ul class="pagination">
        <li><?php echo paginate_links();?></li>
  </ul>
</nav>
	<hr>
</div>


<!-- Reviews Section 
Review posts go here.

Create new WP_Query to meet the requirements of 9 reviews on the front page
-->
<?php $reviewPosts = new WP_Query(array(
    'posts_per_page' => 9,
    'post_type' => 'reviews'
  )); ?>
<!-- end query -->
<div class="container">
<h2 class="text-center" style="color: black">REVIEWS</h2>
	<hr>
  <div class="row">
    <?php while($reviewPosts->have_posts()) { echo $reviewPosts->the_post(); ?>
    <div style="padding: 1em 1em 1em 1em"class="col-lg-4 col-md-6">
      <div class="media-object-default">
        <div class="media">
          <div class="media-left"> <a href="<?php the_permalink()?>"> <img class="media-object" src="<?php echo the_field('review_post_thumbnail') ?>" alt="placeholder image"> </a> </div>
          <div class="media-body">
            <h4 class="media-heading"><?php the_title(); ?></h4>
            <?php echo wp_trim_words(get_the_content(), 10); ?></div>
        </div>
      </div>
    </div>
  <?php } 
    wp_reset_postdata();
  ?>
  </div>
</div>
<?php get_footer(); ?>