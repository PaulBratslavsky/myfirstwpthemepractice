<?php 
    /*
        Template Name: Blog Page
    */
?>

<?php get_header(); ?>
    <h1>This is my first PHP site</h1>
    <!-- <img src="<?php header_image(); ?>" height="<?php //echo get_custom_header()->height; ?>" width="100%<?php //echo get_custom_header()->width; ?>" alt="My header Image" /> -->
            <!-- Header Image End -->
    <!--  This is the post loop -->
    <?php if ( have_posts() ): ?>
        <?php while ( have_posts() ): the_post(); ?>
            <h3><?php the_title(); ?></h3>
            <div class="thumbnail-img"><?php the_post_thumbnail('thumbnail'); ?></div>
            <small>Posted on: <?php the_time('F j, y'); ?> at <?php the_time('g:i a'); ?> in <?php the_category(); ?></small>
            <p><?php the_content(); ?></p>
            <hr>
        <?php endwhile ?>
    <?php endif ?>
    <!-- End of post loop -->

<?php get_footer(); ?>