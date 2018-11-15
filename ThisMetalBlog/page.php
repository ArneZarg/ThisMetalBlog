<!-- For Individual pages -->
<?php get_header();
	while(have_posts()){
		the_post() ?>
	<div class="container">
			<h1 class="text-center"><?php the_title(); ?></h1>
      <hr>
      <p><?php the_content(); ?></p>
  </div>
<?php } ?>
<?php get_footer() ?>