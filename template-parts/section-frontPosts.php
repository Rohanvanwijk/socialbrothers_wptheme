<?php 
$args = array(
    "post_type" => "post",
    "posts_per_page" => 4
);
$_posts = new WP_Query($args);
?>

<?php if($_posts->have_posts()): ?>

    <div class="row">
    <?php while ($_posts->have_posts()): $_posts->the_post(); ?>
        <div class="col-md-6 col-sm-12">
        <a href="<?php the_permalink(); ?>">
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
            <div class="front-posts__content">
                <h3><?php the_title(); ?></h3>
                <p><?php the_excerpt(); ?></p>
            </div>
        </div>
        </a>

<?php endwhile; ?>
</div>
<?php endif; ?>