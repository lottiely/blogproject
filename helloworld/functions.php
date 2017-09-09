<?php
	if( ! function_exists('blog_setup')):
		function blog_setup() {
			//let WordPress handle the Title tags
			add_theme_support('title-tag');
		}
	endif;
	add_action('after_setup_theme', 'blog_setup');

/* ----- Register Menus ----- */

function register_blog_menus(){
	register_nav_menus(
		array(
			'primary' => __('Primary Menu'),
			'footer' => __('Footer Menu')
			)
		);
}
add_action('init', 'register_blog_menus');

function blog_scripts(){
	//enqueue main stylesheets
	wp_enqueue_style('blog_styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'blog_scripts');