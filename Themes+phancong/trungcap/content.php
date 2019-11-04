<article id="post-<?php the_ID();?>" <?php post_class(); ?>>
    <div class="entry-thumbnail">
        <?php trungcap_thumbnail('thumbnail'); ?>
    </div>
    <div class="entry-header">
        <?php trungcap_entry_header(); ?>
        <?php trungcap_entry_meta(); ?>
    </div>
    <div class="entry-content">
        <?php trungcap_entry_content(); ?>
        <?php ( is_single() ? trungcap_entry_tag() :''); ?>
    </div>
    
</article>
