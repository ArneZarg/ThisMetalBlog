<?php
	function metal_files(){
	wp_register_script( 'jScript', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js' );
	wp_register_script('searchjs', get_template_directory_uri() . '/js/search.js');
    wp_register_script('bootstrapjs',get_template_directory_uri() .'/js/bootstrap.js');
    wp_enqueue_script( 'jScript' );
    wp_enqueue_script('searchjs');
    wp_enqueue_script( 'bootstrapjs' );
		wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
		wp_enqueue_style('university_main_styles', get_stylesheet_uri(), NULL, microtime());
	}
	add_action('wp_enqueue_scripts', 'metal_files');//for first argument you need wp_enqueue_scripts to be the name. For the second argument, name doesn't matter because you create the file.

	function university_features(){
		register_nav_menu('headerMenuLocation', 'Header Menu Location');//args('name of the menu', 'the text that actually shows up in the menu') this allows you to make a menu in wp-admin.
		register_nav_menu('footerLocationOne', 'Footer Location One');
		register_nav_menu('footerLocationTwo', 'Footer Location Two');
		add_theme_support('title-tag');
	}
	add_action('after_setup_theme', 'university_features');//args: to have a unique title for every page: (wordpress function after_setup_theme, our function)

	//in case this page ever has events (future planning...)	
	function university_adjust_queries($query){
		if(!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()){
			$today = date('Ymd');
			$query->set('meta_key', 'event_date');
			$query->set('orderby', 'meta_value_num');
			$query->set('order', 'ASC');
			$query->set('meta_query', array(
              array(
                'key' => 'event_date',
                'compare' => '>=',
                'value' => $today,
                'type' => 'numeric'
              )
            ));
		}
	}

	add_action('pre_get_posts', 'university_adjust_queries');

	//make excerpt length shorter
	function shorter_excerpt_length($length){
		return 10;
	}
	add_filter('excerpt_length', 'shorter_excerpt_length', 999);
?>