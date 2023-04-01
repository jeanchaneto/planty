<?php

//Enqueue stylesheet
function hello_elementor_child_enqueue_scripts() {
	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		'1.0.0'
	);
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts', 20 );

//Display admin link on main navigation if admin logged in

function planty_nav_menu_args($args = '')
{
	if (is_super_admin(get_current_user_id())) {
		// Admin menu to display
		$args['menu'] = 3;
	} else {
		// Public menu to display
		$args['menu'] = 1;
	}
	return $args;
}

add_filter('wp_nav_menu_args', 'planty_nav_menu_args');