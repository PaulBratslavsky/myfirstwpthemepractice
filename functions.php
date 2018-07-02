<?php 
    function pb_function_include_css() {
        wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/css/pbstyles.css', array(), '1.0.0', 'all' );
        wp_enqueue_script( 'customjs', get_template_directory_uri() . '/js/pbscripts.js', array(), '1.0.0', true );
    }

    add_action( 'wp_enqueue_scripts', 'pb_function_include_css' );
?>