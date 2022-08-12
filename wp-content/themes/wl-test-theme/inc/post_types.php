<?php

function create_post_types()
{
    create_post_type('cars', [
        'menu_icon' => 'dashicons-car',
        'supports'  => ['title', 'editor', 'thumbnail', 'page-attributes'],
        'labels'    => [
            'name'          => __('Cars', 'woplab'),
            'singular_name' => __('Cars', 'woplab'),
            'add_new_item'  => __('Add New Car', 'woplab'),
            'view_item'     => __('View Car', 'woplab'),
            'search_items'  => __('Search Car', 'woplab'),
            'not_found'     => __('No News found', 'woplab'),
            'menu_name'     => __('Cars', 'woplab'),
        ],
    ]);

    create_taxonomy('brand', 'cars', [
        'labels' => [
            'singular_name'     => __('Brands', 'woplab'),
            'search_items'      => __('Search Brand', 'woplab'),
            'all_items'         => __('All Brands', 'woplab'),
            'parent_item'       => __('Parent Brand', 'woplab'),
            'parent_item_colon' => __('Parent Brand:', 'woplab'),
            'edit_item'         => __('Edit Brand', 'woplab'),
            'update_item'       => __('Update Brand', 'woplab'),
            'add_new_item'      => __('Add New Brand', 'woplab'),
            'new_item_name'     => __('New Brand Name', 'woplab'),
            'menu_name'         => __('Brands', 'woplab'),
        ],
    ]);

    create_taxonomy('country', 'cars', [
        'labels' => [
            'singular_name'     => __('Countries', 'woplab'),
            'search_items'      => __('Search Country', 'woplab'),
            'all_items'         => __('All Countries', 'woplab'),
            'parent_item'       => __('Parent Country', 'woplab'),
            'parent_item_colon' => __('Parent Country:', 'woplab'),
            'edit_item'         => __('Edit Country', 'woplab'),
            'update_item'       => __('Update Country', 'woplab'),
            'add_new_item'      => __('Add New Country', 'woplab'),
            'new_item_name'     => __('New Country Name', 'woplab'),
            'menu_name'         => __('Countries', 'woplab'),
        ],
    ]);
}


function create_post_type($postType, $args = [])
{
    $args = array_merge([
        'public'        => true,
        'show_ui'       => true,
        'has_archive'   => true,
        'menu_position' => 20,
        'hierarchical'  => true,
        'supports'      => ['title', 'excerpt', 'thumbnail', 'editor'],
    ], $args);

    register_post_type($postType, $args);
}

function create_taxonomy($taxonomy, $postType, $args = [])
{
    $args = array_merge([
        'description'  => '',
        'public'       => true,
        'hierarchical' => true,
        'has_archive'  => true,
    ], $args);

    register_taxonomy($taxonomy, $postType, $args);
}

add_action('init', 'create_post_types');