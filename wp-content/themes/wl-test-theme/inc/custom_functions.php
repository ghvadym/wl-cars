<?php

if (!function_exists('dd')) {
    function dd()
    {
        echo '<pre>';
        array_map(function ($x) {
            var_dump($x);
        }, func_get_args());
        die;
    }
}

function getPosts(array $data = []): array
{
    $args = array_merge([
        'post_type'   => 'cars',
        'post_status' => 'publish',
        'numberposts' => -1,
        'orderby'     => 'menu_order',
        'order'       => 'asc',
    ], $data);

    return get_posts($args);
}

function getPostThumbnail($postId = 0): string
{
    if (!$postId) {
        return '';
    }

    return get_the_post_thumbnail($postId) ?: defaultImage();
}

function defaultImage(): string
{
    $path = get_template_directory_uri() . '/assets/img/default-image.png';
    return sprintf('<img src="%s" alt="Default image">', $path);
}