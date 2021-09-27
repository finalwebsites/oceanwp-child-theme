<?php

function oceanwp_child_enqueue_parent_style() {
	$theme   = wp_get_theme( 'OceanWP' );
	$version = $theme->get( 'Version' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'oceanwp-style' ), $version );
	
}
add_action( 'wp_enqueue_scripts', 'oceanwp_child_enqueue_parent_style', 100 );
