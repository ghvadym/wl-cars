<?php

add_action('wp_enqueue_scripts', 'register_scripts');
add_action('after_setup_theme', 'theme_setup_settings');
add_action('admin_menu', 'remove_default_post_types');

add_filter('upload_mimes', 'upload_allow_types');
add_filter('use_block_editor_for_post', '__return_false');
add_filter('show_admin_bar', '__return_false');
add_filter('acf/format_value/type=text', 'do_shortcode');

function register_scripts()
{
    theme_styles();
    theme_scripts();
}

function theme_styles()
{
    wp_enqueue_style('adv-parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('adv-child-style', get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_style('adv-app-style', get_stylesheet_directory_uri() . '/assets/css/app.css');
}

function theme_scripts()
{
    wp_enqueue_script('adv-main-script', get_stylesheet_directory_uri() . '/assets/js/app.js', ['jquery'], time(), true);
}

function upload_allow_types($types)
{
    $types['svg'] = 'image/svg+xml';
    $types['webp'] = 'image/webp';
    return $types;
}

function theme_setup_settings()
{
    register_nav_menus([
        'main_header' => 'Main Header',
        'main_footer' => 'Main Footer',
    ]);

    add_theme_support('post-thumbnails', ['cars']);
    add_theme_support('custom-logo', [
        'unlink-homepage-logo' => true,
    ]);
}

function remove_default_post_types()
{
    remove_menu_page('edit.php');
    remove_menu_page('edit-comments.php');
}