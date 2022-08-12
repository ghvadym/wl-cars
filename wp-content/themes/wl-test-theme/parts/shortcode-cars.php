<?php

$data = [];

if (isset($args['count'])) {
    $data['numberposts'] = $args['count'];
}

$posts = getPosts($data);

if (empty($posts)) {
    echo '<p>' . __('Posts not found', 'woplab') .'</p>';
    return;
}
?>

<div class="cars">
    <h2>
        <?php _e('Cars', 'woplab'); ?>:
    </h2>
    <ul class="cars-list">
        <?php foreach($posts as $post): ?>
            <li class="car-item">
                <a href="<?php the_permalink($post); ?>">
                    <h3 class="car-title">
                        <?php echo $post->post_title; ?>
                    </h3>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>