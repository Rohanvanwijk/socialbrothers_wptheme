<?php get_header(); ?>

<?php get_template_part("template-parts/section", "banner"); ?>

<div class="wrapper">
    <div class="blog-post">
        <h1><?php the_title(); ?></h1>

        <?php get_template_part("template-parts/section", "blogcontent"); ?>

    </div>
    
</div>

<?php get_footer(); ?>