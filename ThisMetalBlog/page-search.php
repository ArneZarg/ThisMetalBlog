<?php get_header();
	while(have_posts()){
		the_post() ?>
	<div class="container">
			<h1 class="text-center"><?php the_title(); ?></h1>
      <hr>
      <!-- SEARCH AREA-->
      <form class="navbar-form navbar-left" role="search" action="<?php echo esc_url(site_url('/')) ?>">
      <!--BUTTON-->
      <div class="form-group">
          <input name="s" method="get" class="form-control" placeholder="Search">
        </div>
        <button type="submit" value="Search" class="btn btn-default"><i class="fas fa-search"></i><br>
        </button>
          </form>
      <!-- end search Area -->
  </div>
<?php } ?>
<?php get_footer() ?>