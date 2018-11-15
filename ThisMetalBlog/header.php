<!--
  This page is for the website's header
-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>This Metal Blog</title>

<!-- Bootstrap and Other Stylesheet links -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<?php wp_head()?>
</head>

<body style ="background-color: #C7C7C7">
  <!--nav start-->
<nav class="col-lg-12" style="background-color: ">
  <div class="container">     
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="<?php echo esc_url(site_url()); ?>"><img src="<?php echo get_theme_file_uri('images/That Metal Blog white logo copy.png');?>" class="img-responsive"></a> </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo site_url(); ?>">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="<?php echo site_url('/blog'); ?>">Blog</a> </li>
        <li><a href="<?php echo site_url('/reviews');?>">Reviews</a> </li>
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">More <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo esc_url(site_url('/about-us')) ?>">About Us</a> </li>
            <li><a href="<?php echo esc_url(site_url('/contact-us')) ?>">Contact Us</a> </li>
            <li><a href="<?php echo esc_url(site_url('/podcasts')) ?>">Podcasts</a> </li>
            <!-- KEEP THIS COMMENTED OUT SECTION IN CASE IT IS NEEDED IN THE FUTURE -->
            <!--<li role="separator" class="divider"></li>
            <li><a href="#"></a> </li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a> </li>-->
          </ul>
        </li>
      </ul>
      <!--SEARCH AREA -->
      <form class="navbar-form navbar-right" role="search" action="<?php echo esc_url(site_url('/')) ?>">
      <!--BUTTON-->
      <div class="form-group">
          <input name="s" method="get" class="form-control" placeholder="Search">
        </div>
        <button type="submit" value="Search" class="btn btn-default"><i class="fas fa-search"></i><br>
        </button>
          </form>
      <!-- end search Area -->
      <ul class="nav navbar-nav navbar-right hidden-sm">
        <li> </li>
        <li class="dropdown">
<!-- Placeholder Dropdown Menu -->
<ul class="dropdown-menu">
            <li><a href="#">Action</a> </li>
            <li><a href="#">Another action</a> </li>
            <li><a href="#">Something else here</a> </li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a> </li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<!-- CAROUSEL -->
<div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div id="carousel1" class="carousel slide">
          <ol class="carousel-indicators">
            <li data-target="#carousel1" data-slide-to="0" class="active"> </li>
            <li data-target="#carousel1" data-slide-to="1" class=""> </li>
            <li data-target="#carousel1" data-slide-to="2" class=""> </li>
          </ol>
          <!--
          The section below is for the webpage's slider. Can be edited by going into the slider post and editing the slider post's image.

          DO NOT ADD A NEW POST, EDIT THE SLIDER POST and change the images and captions as needed. Further Instructions in Wordpress admin bar

          To be added: dynamic permalinks
          -->
          <?php $sliderPosts = new WP_Query(array('post_type' => 'slider'));?>
          <div class="carousel-inner">
            <?php while ($sliderPosts-> have_posts()){
              $sliderPosts->the_post(); ?>
            <div class="item active"> <a href="<?php the_field('slide_link_1') ?>"><img class="img-responsive" src="<?php the_field('slide_image'); ?>"></a>
              <div class="carousel-caption"> <?php the_field('slider_caption') ?> </div>
            </div>
            <div class="item"> <a href="<?php the_field('slide_link_2')?>"><img class="img-responsive" src="<?php the_field('slide_image_2'); ?>"></a>
              <div class="carousel-caption"> <?php the_field('slider_caption_2') ?> </div>
            </div>
            <div class="item"> <img class="img-responsive" src="<?php the_field('slide_image_3'); ?>">
              <div class="carousel-caption"> <?php the_field('slider_caption_3') ?> </div>
            </div>
        <?php } wp_reset_postdata(); ?>
          <a class="left carousel-control" href="#carousel1" data-slide="prev"><span class="icon-prev"></span></a> <a class="right carousel-control" href="#carousel1" data-slide="next"><span class="icon-next"></span></a></div>
      </div>
</div>
<!-- END CAROUSEL -->
    <hr>
  </div>
</div>