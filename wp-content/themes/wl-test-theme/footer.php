<?php
wp_footer();
?>

</main>

<footer class="footer">
    <div class="container">
        <div class="footer__nav">
            <?php if (function_exists('the_custom_logo') && has_custom_logo()) the_custom_logo(); ?>
        </div>
    </div>
</footer>

</body>
</html>