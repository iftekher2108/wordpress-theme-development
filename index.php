<?php

/*
* this this my first wordpress theme
*
* Name: iftekher mahmud pervez
*/

?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>
        <?php
        // bloginfo('title');
        ?>
</title> -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'your-theme-slug'); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php
                wp_nav_menu([
				'theme_location'  => 'primary',              
                'container'       => false,                   
                'menu_class'      => 'navbar-nav ms-auto',
				]);
                ?>
						
<?php
// Add 'nav-item' class to each <li> element
function add_nav_item_class($classes, $item, $args) {
    $classes[] = 'nav-item';
    return $classes;
}
add_filter('nav_menu_css_class', 'add_nav_item_class', 10, 3);

// Add 'nav-link' class to each <a> element
function add_nav_link_class($atts, $item, $args) {
    $atts['class'] = 'nav-link';
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_nav_link_class', 10, 3);

// Add 'dropdown' class to parent <li> elements
function add_dropdown_class($classes, $item, $args) {
    if (in_array('menu-item-has-children', $classes)) {
        $classes[] = 'dropdown';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_dropdown_class', 10, 3);

// Add 'dropdown-toggle' class and attributes to parent <a> elements
function add_dropdown_link_class($atts, $item, $args) {
    if (in_array('menu-item-has-children', $item->classes)) {
        $atts['class'] = 'nav-link dropdown-toggle';
        $atts['data-bs-toggle'] = 'dropdown';
        $atts['aria-haspopup'] = 'true';
        $atts['aria-expanded'] = 'false';
        $atts['role'] = 'button';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_dropdown_link_class', 10, 3);

// Add 'dropdown-menu' class to submenu <ul> elements
function add_dropdown_menu_class($classes, $args, $depth) {
    if ($depth === 1) {
        $classes[] = 'dropdown-menu';
    }
    return $classes;
}
add_filter('nav_menu_submenu_css_class', 'add_dropdown_menu_class', 10, 3);
?>
				
				

            </div>
        </nav>
    </header>



    <h1>my first wordpress theme</h1>
    <p>iftekher mahmud</p>






    <?php wp_footer(); ?>
</body>

</html>