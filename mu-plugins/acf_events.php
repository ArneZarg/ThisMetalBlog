<?php function decade_events(){
		register_post_type('event', array(
			'supports' => array('title', 'editor', 'excerpt'),
			'rewrite' => array('slug' => 'events'),
			'has_archive' => true,
			'public' => true,
			'labels' => array(
				'name' => 'Events',
				'add_new_item' => 'Add New Event',
				'edit_item' => 'Edit Event',
				'singular_name' => 'Event'
			),
			'menu_icon' => 'dashicons-calendar'
		));
	}

	add_action('init', 'decade_events');//to create new post type. 'init' is first argument, 2nd argument is a function that you define.
?>