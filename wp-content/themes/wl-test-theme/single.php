<?php
get_header();

$post = get_post();
$brand = get_the_terms($post->ID, 'brand');
$country = get_the_terms($post->ID, 'country');
$data = get_post_meta($post->ID);
?>

    <section class="section">
        <div class="container">
            <h1 class="title">
                <?php the_title(); ?>
            </h1>
            <div class="car-image">
                <?php the_post_thumbnail('large'); ?>
            </div>
            <table class="car-info">
                <?php if ($brand): ?>
                    <tr>
                        <th>
                            <?php _e('Brand', 'woplab') ?>:
                        </th>
                        <td>
                            <p>
                                <?php echo $brand[0]->name; ?>
                            </p>
                        </td>
                    </tr>
                <?php endif; ?>

                <?php if ($country): ?>
                    <tr>
                        <th>
                            <?php _e('Country', 'woplab') ?>:
                        </th>
                        <td>
                            <p>
                                <?php echo $country[0]->name; ?>
                            </p>
                        </td>
                    </tr>
                <?php endif; ?>

                <?php if ($data['wl_meta_color'][0]): ?>
                    <tr>
                        <th>
                            <?php _e('Color', 'woplab') ?>:
                        </th>
                        <td>
                            <p class="car-color" style="background-color: <?php echo $data['wl_meta_color'][0]; ?>"></p>
                        </td>
                    </tr>
                <?php endif; ?>

                <?php if ($data['wl_meta_fuel'][0]): ?>
                    <tr>
                        <th>
                            <?php _e('Fuel', 'woplab') ?>:
                        </th>
                        <td>
                            <p>
                                <?php echo $data['wl_meta_fuel'][0]; ?>
                            </p>
                        </td>
                    </tr>
                <?php endif; ?>

                <?php if ($data['wl_meta_power'][0]): ?>
                    <tr>
                        <th>
                            <?php _e('Power', 'woplab') ?>:
                        </th>
                        <td>
                            <p>
                                <?php echo $data['wl_meta_power'][0]; ?>
                            </p>
                        </td>
                    </tr>
                <?php endif; ?>

                <?php if ($data['wl_meta_price'][0]): ?>
                    <tr>
                        <th>
                            <?php _e('Price', 'woplab') ?>:
                        </th>
                        <td>
                            <p>
                                <?php echo '$' . $data['wl_meta_price'][0]; ?>
                            </p>
                        </td>
                    </tr>
                <?php endif; ?>
            </table>
            <article class="article">
                <?php the_content(); ?>
            </article>
        </div>
    </section>

<?php
get_footer();