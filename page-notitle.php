<?php 
    /*
        Template Name: Page No Title
    */
?>

<?php get_header(); ?>
    <small>This is my Page Template</small>
    <!--  This is the post loop -->
    <?php if ( have_posts() ): ?>
        <?php while ( have_posts() ): the_post(); ?>
            <small>Posted on: <?php the_time('F j, y'); ?> at <?php the_time('g:i a'); ?> in <?php the_category(); ?></small>
            <p><?php the_content(); ?></p>
            <hr>
        <?php endwhile ?>
    <?php endif ?>
    <!-- End of post loop -->

<?php get_footer(); ?>