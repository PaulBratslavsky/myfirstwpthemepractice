<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> > 
    <header class="entry-title">
        <h1><?php the_title(); ?></h1>
    </header>
    
    <div class="thumbnail-img"><?php the_post_thumbnail('thumbnail'); ?></div>

    <small>Posted on: <?php the_time('F j, y'); ?> at <?php the_time('g:i a'); ?> in <?php the_category(); ?></small>

    <p><?php the_content(); ?></p>

</article>