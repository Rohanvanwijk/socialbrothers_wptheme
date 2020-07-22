<?php get_header(); ?>

<?php get_template_part("template-parts/section", "banner"); ?>

<div class="wrapper">
    <div class="blog-archive">
        <div class="row">
            <?php get_template_part("template-parts/section", "archive"); ?>
        </div>
        <?php the_posts_pagination( array(
	        'mid_size'  => 2,
	        'prev_text' => __( 'Vorige pagina', 'textdomain' ),
	        'next_text' => __( 'Volgende pagina', 'textdomain' ),
        ) ); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>