<div class="d-flex flex-column flex-md-row justify-content-between mb-5">
    <div class="flex-grow-1">
        <a href="<?php the_permalink(); ?>"><h3 class="mb-0"><?php the_title(); ?></h3></a>
        <div class="subheading mb-3"><?php the_author(); ?></div>
        <a href="<?php the_permalink(); ?>"  style="color:#6c757d !important;" ><p><?php the_excerpt(); ?></p></a>
    </div>
    <div class="flex-shrink-0"><span class="text-primary"><?php echo get_the_date( 'd M Y', $post->ID ) ?></span></div>
</div>