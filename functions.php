<?php

// theme title
add_theme_support('title-tag');
add_theme_support( 	'custom-logo', array('height' => 350,'width'  => 600));
add_theme_support( 'widgets');
add_theme_support( 'custom-header');
add_theme_support( 'appearance-tools');
add_theme_support('widgets-block-editor');
add_theme_support('menus');
$args = array(
	'search-form',
	'comment-form',
	'comment-list',
	'gallery',
	'caption',

	'meta',
	'style',
	'script',
);
add_theme_support( 'html5', $args );

// wp-block added
if( ! function_exists('theme_slug_setup')) {
function theme_slug_setup() {
	add_theme_support( 'wp-block-styles' );
}
add_action( 'after_setup_theme', 'theme_slug_setup' );
// wp-block added    
}


if( ! function_exists('iftekher_theme_css_style')) {
// all css file initialization
function iftekher_theme_css_style() {
    // theme main css initialization
    wp_enqueue_style( 'iftekher-style',get_stylesheet_uri());
    // css and plugins css file initialization
    wp_enqueue_style('bootstrap-cs',get_template_directory_uri().'/assets/plugins/bootstrap/css/bootstrap-cs.min.css',array(),'5.3.3');     // custom bootstrap initialization
    wp_enqueue_style('iftekher-main.min', get_template_directory_uri().'/assets/scss/main.min.css',array(),'1.0.0');      // custom css initialization
    // custom js initialization
}
add_action( 'wp_enqueue_scripts','iftekher_theme_css_style');  // file function initialization
// all css file initialization   
}

if( ! function_exists('iftekher_theme_js_script')) {
// all js file initialization
function iftekher_theme_js_script() {
        // javascript & js plugins file initialization
        wp_enqueue_script('bootstrap-js',get_template_directory_uri().'/assets/plugins/bootstrap/js/bootstrap.bundle.min.js',array(),'5.3.3', 'true');      // custom bootstrap initialization
        wp_enqueue_script('jquery');        // jquery plugin initialization
        wp_enqueue_script('iftekher-main',get_template_directory_uri().'/assets/js/main.js',array(),'1.0.0','true');  
}
add_action( 'wp_enqueue_scripts','iftekher_theme_js_script');  // file function initialization
// all js file initialization
}

// register the menu items
		register_nav_menus( array(
	    	'primary' => __( 'Primary Menu'),
	    	'footer'  => __( 'Footer Menu'),
		) );

// register the menu items






