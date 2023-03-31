<?php
add_action( 'wp_enqueue_scripts', 'planty_enqueue_styles' );
function planty_enqueue_styles() {
	wp_enqueue_style( 'child-style',
		get_stylesheet_uri(),
		array( 'twenty-twenty-one-print-style' )
	);
}
?>