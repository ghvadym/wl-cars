<?php

add_action('customize_register', 'customizer_init');

function customizer_init(WP_Customize_Manager $wp_customize)
{
    if ($section = 'site_options') {
        $wp_customize->add_section($section, [
            'title'    => 'Site Options',
            'priority' => 201,
        ]);

        addCustomizeField($wp_customize, $section, 'site_options_phone', __('Phone Number', 'woplab'));
    }
}

function addCustomizeField($wp_customize, $section, $id, $label, $type = 'text', $transport = 'refresh')
{
    $wp_customize->add_setting($id, [
        'default'   => '',
        'transport' => $transport
    ]);

    $wp_customize->add_control($id, [
        'section' => $section,
        'label'   => $label,
        'type'    => $type
    ]);
}

