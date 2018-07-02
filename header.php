<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Wordpress Site</title>
    <?php wp_head(); ?>
</head>

<?php // is_home() will show blog page use is_front_page() instead
    if ( is_front_page() ): 
        $my_classes = array( 'my-home-page-class', 'my-class' );
    else:
        $my_classes = array( 'my-other-class' );
    endif;
?> 

<body <?php body_class( $my_classes ); ?> >
    <div class="wrapper">
        <header>
            <?php wp_nav_menu( array('theme_location' => 'primary') ); ?>
        </header>