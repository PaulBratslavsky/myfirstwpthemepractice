<?php get_header(); ?>
    <!--  This is the post loop -->
    <?php if ( have_posts() ): ?>
        <?php while ( have_posts() ): the_post(); ?>
            <h3><?php the_title(); ?></h3>
            <hr>
            <p><?php the_content(); ?></p>
        <?php endwhile ?>
    <?php endif ?>
    <!-- End of post loop -->

<?php get_footer(); ?>