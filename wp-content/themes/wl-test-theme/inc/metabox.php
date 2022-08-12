<?php

add_action('add_meta_boxes', 'add_custom_meta_boxes');
add_action('save_post', 'save_post_data');

function add_custom_meta_boxes()
{
    add_meta_box(
        'wl-car-options',
        'Car Options',
        'wl_car_options_call',
        'cars',
        'side'
    );
}

function wl_car_options_call($post)
{
    $data = [
        'wl_meta_color' => '',
        'wl_meta_fuel'  => '',
        'wl_meta_power' => 0,
        'wl_meta_price' => 0
    ];

    foreach ($data as $name => $value) {
        $metaValue = get_post_meta($post->ID, $name, true);
        if (!$metaValue) {
            continue;
        }

        $data[$name] = $metaValue;
    }

    get_template_part('parts/metabox-car-options', '', $data);
}

function save_post_data($post_id)
{
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    $fields = [
        'wl_meta_color',
        'wl_meta_fuel',
        'wl_meta_power',
        'wl_meta_price'
    ];

    foreach ($fields as $field) {
        if (!isset($_POST[$field])) {
            continue;
        }

        update_post_meta($post_id, $field, $_POST[$field] ?? '');
    }
}