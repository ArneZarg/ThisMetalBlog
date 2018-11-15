<!-- 

This page is for the displaying of search results. Includes extra search bar so user doesn't have to go back to the top to search.

Displays search in standard format...

-->

<?php get_header();?>
  <div class="container">
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
  <?php while(have_posts()){
    the_post() ?>
  <div class="container">
      <h1><?php the_title(); ?></h1>
      <p>Posted by <?php the_author_posts_link()?> on <?php the_time('n.j.y'); ?></p>
      <hr>
      <p><?php the_excerpt(); ?></p>
      <p><a href="<?php the_permalink(); ?>">Read More</a></p>
      <hr>
  </div>
<?php } ?>
  <!-- Paginate Links -->
  <div class="container">
    <nav class="text-center" style="align-content: center">
      <ul class="pagination">
            <li><?php echo paginate_links();?></li>
      </ul>
    </nav>
  </div>
<?php get_footer() ?>