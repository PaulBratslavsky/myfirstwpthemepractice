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
        <header>
            <nav class="navbar navbar-expand-lg navbar navbar-dark bg-blue">
                <div class="container">
                    <a class="navbar-brand" href="#"><?php bloginfo( 'title' ); ?></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <?php 
                            wp_nav_menu( array(
                                'theme_location' => 'primary', 
                                'container' => 'false',
                                'menu_class' => 'navbar-nav mr-auto',
                                ) 
                            ); 
                        ?>
                    </div>
                </div>    
            </nav>
        </header>
            
