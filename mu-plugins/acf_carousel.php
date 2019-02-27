<?php function decade_carousel(){
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

	add_action('init', 'decade_carousel');//to create new post type. 'init' is first argument, 2nd argument is a function that you define.
?>