<?php

get_header();
?>

    <section class="section">
        <div class="container">
            <h1 class="title">
                <?php _e('Error page', 'woplab'); ?>
            </h1>
            <article class="article align-center">
                <a href="<?php echo get_bloginfo('url'); ?>">
                    <?php _e('Go to homepage', 'woplab'); ?>
                </a>
            </article>
        </div>
    </section>

<?php
get_footer();