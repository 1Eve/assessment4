<?php
function assessment4_script_enqueue(){
    wp_enqueue_style('customstyle', get_template_directory_uri().'/custom/custom.css', [], '3.1.1', 'all');
    wp_enqueue_script('customjs', get_template_directory_uri(). '/custom/custom.js',[], '1.0.0', true);

    // Using bootstrap
    wp_register_style('bootstrapcss', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css', [], '5.2.3', 'all');

    wp_enqueue_style('bootstrapcss');

    wp_register_script('jsbootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js', [], '5.2.3', false);
    wp_enqueue_script ('jsbootstrap');
}

add_action('wp_enqueue_scripts', 'assessment4_script_enqueue');

// ADDING MENUS - HEADER AND FOOTER


// ADDING MENUS - HEADER AND FOOTER

function assessment4theme_setup(){
    add_theme_support('menus');
    register_nav_menu('primary', 'Primary Header');
    register_nav_menu('secondary', 'Footer Navigation');
}

/**
 * THEME SUPPORT
 */
add_theme_support('custom-header');
add_theme_support('post-thumbnails');

add_theme_support('post-formats',['aside', 'image', 'video']);

// ADDING NAVWALKER CLASS
if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action('init','_setup', 'assessment4theme_setup');
?>
