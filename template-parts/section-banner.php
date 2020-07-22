<header class="header">
    <div class="header__container">
        <div class="wrapper">
            <div class="row justify-content-between align-items-center">
                <div class="col">
                    <img src="<?php bloginfo("template_url"); ?>/logo/SBlogo.svg" alt="logo" class="header__logo">
                </div>
                <div class="col header__menu">
                    <?php wp_nav_menu(
                        array(
                            "theme_location" => "top-menu"
                        )
                    ); ?>
                </div>
            </div>
            <h1 class="page-title"><?php wp_title("", true, ""); ?></h1>
        </div>
    </div>
    <?php if(has_post_thumbnail()): ?>
            <img src="<?php the_post_thumbnail_url(); ?>" alt="post thumb" class="header__image">
    <?php else: ?>
        <img src="<?php bloginfo("template_url"); ?>/images/Foto-Social-Brothers-1.jpg" class="header__image">
    <?php endif; ?>
    
    
</header>