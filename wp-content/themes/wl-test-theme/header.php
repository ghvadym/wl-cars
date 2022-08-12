<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php the_title() ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header">
    <div class="header__row">
        <div class="header__logo">
            <?php function_exists('the_custom_logo') && has_custom_logo() ? the_custom_logo() : _e('CARS', 'woplab'); ?>
        </div>
        <?php if ($tel = get_theme_mod('site_options_phone')): ?>
            <div class="header__contact">
                <a href="tel:<?php echo $tel; ?>">
                    <?php echo $tel; ?>
                </a>
            </div>
        <?php endif; ?>
    </div>
</header>
<main class="main">