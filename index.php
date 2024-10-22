<?php

/*
* this this my first wordpress theme
*
* Name: iftekher mahmud pervez
*/

?>

<?php get_header(); ?>

<body <?php body_class(); ?>>

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>

                <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="">
                    <span class="navbar-toggler-icon"></span>
                </button> -->

                <?php
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'navbar-nav ms-auto',
                ]);
                ?>

            </div>
            <?php get_search_form(); ?>
        </nav>

    </header>
    <h1>my first wordpress theme</h1>
    <p>iftekher mahmud</p>


<?php get_footer(); ?>