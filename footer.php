            <footer>
                <?php wp_footer(); ?>
                <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <?php 
                            wp_nav_menu( array(
                                'theme_location' => 'secondary', 
                                'container' => 'false',
                                'menu_class' => 'navbar-nav mr-auto',
                                ) 
                            ); 
                        ?>
                    </div>
                </nav>
            </footer>
        </div><!-- end container div -->
    </body><!-- end body tag -->
</html>