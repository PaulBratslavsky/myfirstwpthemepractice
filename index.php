<?php get_header(); ?>
<img src="<?php header_image(); ?>" height="<?php //echo get_custom_header()->height; ?>" width="100%<?php //echo get_custom_header()->width; ?>" alt="My header Image" />
<div class="container">
    <div class="main-content">
    
    <!--  This is the post loop -->
    <?php if ( have_posts() ): ?>
        <?php while ( have_posts() ): the_post();  ?>
            <?php get_template_part('content', get_post_format() ); ?>
        <?php endwhile ?>
    <?php endif ?>
    <!-- End of post loop -->
    </div>

    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>