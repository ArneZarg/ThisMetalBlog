<?php function university_post_types(){
		register_post_type('slider', array(
			'supports' => array('title', 'editor', 'excerpt'),
			'rewrite' => array('slug' => 'slider'),
			'has_archive' => true,
			'public' => true,
			'labels' => array(
				'name' => 'Slider',
				'add_new_item' => 'Add New Slider',
				'edit_item' => 'Edit Slider',
				'singular_name' => 'Slider'
			),
			'menu_icon' => 'dashicons-images-alt'
		));
	}

	add_action('init', 'university_post_types');//to create new post type. 'init' is first argument, 2nd argument is a function that you define.

	//Creates the Album Reviews post type
	function Album_Reviews(){
		register_post_type('reviews', array(
			'supports' => array('title', 'editor', 'excerpt'),
			'rewrite' => array('slug' => 'reviews'),
			'has_archive' => true,
			'public' => true,
			'labels' => array(
				'name'=> 'Reviews',
				'add_new_item' => 'Add New Review',
				'edit_item' => 'Edit Review',
				'singular_name'=> 'Review'
			),
			'menu_icon' => 'dashicons-album'
		));
	}

	add_action('init', 'Album_Reviews');
?>