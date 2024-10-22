<!DOCTYPE html>
<html <?php language_attributes();?> class="no-js" >
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <!-- <link rel="profile" href="http://gmpg.org/xfn/11" /> -->
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>
