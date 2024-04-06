<?php

// theme title
add_theme_support('title-tag');
add_theme_support( 	'custom-logo', ['height' => 350,'width'  => 600]);
add_theme_support( 'widgets');
// add_theme_support( 'custom-header');
// add_theme_support( 'appearance-tools');


// wp-block added
add_action( 'after_setup_theme', 'theme_slug_setup' );
function theme_slug_setup() {
	add_theme_support( 'wp-block-styles' );
}


// all css and javaScript file initialization
function  iftekher2108_theme_all_css_js_file_initialization() {
    

    // theme main css initialization
    wp_enqueue_style( 'iftekher2108-style',get_stylesheet_uri());

    // css and plugins css file initialization

    wp_register_style('bootstrap-cs',get_template_directory_uri().'/src/plugins/bootstrap/css/bootstrap-cs.min.css',[],'5.3.3');
    wp_enqueue_style('bootstrap-cs');     // custom bootstrap initialization

    wp_register_style( 'iftekher2108-main.min', get_template_directory_uri().'/src/scss/main.min.css',[],'1.0.0');
    wp_enqueue_style('iftekher2108-main.min');      // custom css initialization


    // javascript & js plugins file initialization

    wp_register_script( 'bootstrap-cs',get_template_directory_uri(  ).'/src/plugins/bootstrap/js/bootstrap.bundle.min.js',[],'5.3.3', 'true');
    wp_enqueue_script('bootstrap-cs');      // custom bootstrap initialization

    wp_enqueue_script('jquery');        // jquery plugin initialization
 
    wp_register_script( 'iftekher2108-main', get_template_directory_uri().'/src/js/main.js',[],'1.0.0','true');
    wp_enqueue_script('iftekher2108-main');         // custom js initialization

}
add_action( 'wp_enqueue_scripts','iftekher2108_theme_all_css_js_file_initialization');  // file function initialization
// all css and javaScript file initialization



register_nav_menus( [   // register the menu items
'main_menu' => __('main menu'),
'footer_menu' => __('footer menu'),
]);



// theme walker bootstrap integration initialization
function register_walker(){
	require_once get_template_directory() . '/bootstrap-walker.php';
}
add_action( 'after_setup_theme', 'register_walker' );

add_filter( 'nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3 );
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}




