<?php get_header(); ?>
    <h1>This is my first PHP site</h1>
    <img src="<?php header_image(); ?>" height="<?php //echo get_custom_header()->height; ?>" width="100%<?php //echo get_custom_header()->width; ?>" alt="My header Image" />
            <!-- Header Image End -->
    <!--  This is the post loop -->
    <?php if ( have_posts() ): ?>
        <?php while ( have_posts() ): the_post(); echo "THIS POST IS FORMATED AS " . get_post_format(); ?>
            <?php get_template_part('content', get_post_format() ); ?>
        <?php endwhile ?>
    <?php endif ?>
    <!-- End of post loop -->

<?php get_footer(); ?>