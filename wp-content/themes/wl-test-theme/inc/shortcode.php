<?php

add_shortcode('wl_cars_list', 'wl_cars_list');

function wl_cars_list($data)
{
    ob_start();

    get_template_part('parts/shortcode', 'cars', $data);

    $html = ob_get_contents();
    ob_end_clean();

    return $html;
}