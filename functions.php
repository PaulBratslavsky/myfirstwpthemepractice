<?php 
/*  =================================================
        Include Scripts
    =================================================   */
    
    function pb_function_include_css() {
        // CSS
        wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.1.1', 'all' );
        wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/css/pbstyles.css', array(), '', 'all' );

        // JS
        wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '4.1.1', true );
        wp_enqueue_script( 'customjs', get_template_directory_uri() . '/js/pbscripts.js', array(), '1.0.0', true );
        wp_enqueue_script( 'jquery');
    }

    add_action( 'wp_enqueue_scripts', 'pb_function_include_css' );
    
/*  =================================================
        Activate Menus
    =================================================   */
  
    function pb_function_theme_setup() {
        register_nav_menu( 'primary', 'Our Primary Menu' );
        register_nav_menu( 'secondary', 'Our Footer Menu' );
        add_theme_support( 'menus' );
    }

/*  =================================================
        Add Theme Support
    =================================================   */

    add_action( 'init', 'pb_function_theme_setup'    );

    // ADDS BACKGROUND IMAGE FEATURE IN WP CUSTOMIZER
    add_theme_support( 'custom-background' );
    // ADD CUSTOM HEADER FEATURE IN WP CUSTOMIZER
    add_theme_support( 'custom-header' ); 
    add_theme_support( 'post-thumbnails'); 
    // ADDS POST FUNCTIONALITY HAS 9 POST TIMES TO CUSTOMIZE
    add_theme_support( 'post-formats', array('aside','image','video') );
?>