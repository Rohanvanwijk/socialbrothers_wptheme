<?php if(have_posts()): while(have_posts()): the_post(); ?>
<div class="col-lg-3 col-md-6">
    <a href="<?php the_permalink(); ?>">
        <div class="blog-teaser">
            <?php if(has_post_thumbnail()): ?>
                <div class="blog-teaser__image-container">
                    <img src="<?php the_post_thumbnail_url("medium-size"); ?>" alt="post thumb" class="blog-teaser__thumbnail">
                    <div class="blog-teaser__detail">
                        <div class="blog-teaser__date"><?php echo get_the_date("d-m-Y"); ?></div>
                        <div class="row flex-column">
                            <?php
                            $catogories = get_the_category();
                            foreach($catogories as $cat):?>
                            <div class="col">
                                <span class="blog-teaser__category"><?php echo $cat->name; ?></span>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endif ?>
            <h3 class="blog-teaser__title"><?php the_title(); ?></h3>
            <?php the_excerpt(); ?>
        </div>
    </a>
</div>
<?php endwhile; else: endif; ?>