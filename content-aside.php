<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> > 

<h3><?php the_title(); ?></h3>
<small>This is an aside post</small>
<!-- <div class="thumbnail-img"><?php the_post_thumbnail('thumbnail'); ?></div> -->

<small>Posted on: <?php the_time('F j, y'); ?> at <?php the_time('g:i a'); ?> in <?php the_category(); ?></small>

<!-- <p><?php the_content(); ?></p> -->
</article>