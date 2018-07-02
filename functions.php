<?php 
    // ADDS OUR CUSTOM CSS AND JAVASCRIPT FILES
    function pb_function_include_css() {
        // WP HOOK
        wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/css/pbstyles.css', array(), '1.0.0', 'all' );
        // WP HOOK
        wp_enqueue_script( 'customjs', get_template_directory_uri() . '/js/pbscripts.js', array(), '1.0.0', true );
    }

    add_action( 'wp_enqueue_scripts', 'pb_function_include_css' );

    // ADDS OUR MENU SUPPORT TO THEME
    function pb_function_theme_setup() {
        
        // WP HOOK
        register_nav_menu( 'primary', 'Our Primary Menu' );
        register_nav_menu( 'secondary', 'Our Footer Menu' );
        // WP HOOK
        add_theme_support( 'menus' );
    }

    add_action( 'init', 'pb_function_theme_setup'    );
?>