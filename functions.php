<?php
    add_action( 'wp_enqueue_scripts', 'add_scripts_styles' );
    add_theme_support( 'custom-logo' ); // Registers support for new WordPress theme features (support for thumbnails, record formats, etc.)

    function add_scripts_styles() {
        // plug jquery.js
        wp_deregister_script( 'jquery' ); // deactivation of standard jquery
        wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.7.1.min.js', false, null, true ); // register again (only for jquery).
        // get_template_directory_uri() - gets the URL of the parent theme without a slash at the end.
        wp_enqueue_script( 'jquery' ); // plug the script for a page
        // plug swiper
        wp_enqueue_script( 'swiper-script', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js.', false, null, 'footer' ); 
        // plug main.js
        wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery', 'swiper-script' ), null, 'footer' );
        // plug styles
        wp_enqueue_style( 'fontello', get_template_directory_uri() . '/assets/css/fontello.css' );
        wp_enqueue_style( 'fonts', get_template_directory_uri() . '/assets/css/fonts.css' );
        wp_enqueue_style( 'swiper-style', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css' );
        wp_enqueue_style( 'main', get_stylesheet_uri(), array('fontello', 'fonts', 'swiper-style' ) ); // path to the file style.css
    }
?>