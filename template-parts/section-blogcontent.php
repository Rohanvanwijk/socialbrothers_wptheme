<?php if( have_posts() ): while( have_posts()): the_post(); ?>

    <div class="blog-post__meta">
        <p class="blog-post__author">Door: <?php echo get_the_author_meta("first_name"); ?></p>
        <p class="blog-post__date"><?php echo get_the_date("l d M Y H:i"); ?></p>

        <?php
        $catogories = get_the_category();
        foreach($catogories as $cat):?>
            <a href="<?php echo get_category_link($cat->term_id); ?>">
                <span class="blog-post__category"><?php echo $cat->name; ?></span>
            </a>
        <?php endforeach; ?>
    </div>
    
    <?php the_content(); ?>

<?php endwhile; else: endif; ?>