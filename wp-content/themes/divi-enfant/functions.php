<?php

/**
 * Loading the parent theme css.
 */
function divi_child_load_parent_css() {

	wp_enqueue_style( 'divi-parent-style', get_template_directory_uri() . '/style.css', false, '' );

}
add_action( 'wp_enqueue_scripts', 'divi_child_load_parent_css' );
