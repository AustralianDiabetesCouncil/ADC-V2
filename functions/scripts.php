<?php
function yabtfw_scripts() {
	// Styles
	wp_enqueue_style( 'gravityforms', get_template_directory_uri() . '/style/build/addons/gravityforms.css', array(), '1.0');

	// Scripts
	wp_enqueue_script('jquery');
	wp_enqueue_script('plugins', get_template_directory_uri() . '/js/build/plugins.js', array('jquery'), true);
	wp_enqueue_script('scripts', get_template_directory_uri() . '/js/build/scripts.js', array('jquery'), true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'yabtfw_scripts' );