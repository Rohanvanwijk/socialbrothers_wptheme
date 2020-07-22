<?php get_header(); ?>

<?php get_template_part("template-parts/section", "banner"); ?>

<div class="wrapper">
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="create-post">
                <?php get_template_part("template-parts/section", "createPost"); ?>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
                <div class="front-posts">
                    <?php get_template_part("template-parts/section", "frontPosts"); ?>
                </div>
            
        </div>
    </div>
</div>

<?php get_footer(); ?>