<footer class="footer">
    <div class="footer-info">
        <img src="<?php echo get_template_directory_uri() . "/assets/imgs/logo-dark-large.png"; ?>" alt="FMG FZC logo" class="footer-logo">
        <p class="footer-info__description">Gold Bullion Dealer in Hong Kong SAR, China</p>
        <p class="footer-info__description">© RMG FZC LIMITED</p>
    </div>
    <?php
        wp_nav_menu(array(
            'theme_location' => 'footer-menu',
            'menu_class' => 'footer-nav'
        ));
        ?>
    <p class="footer-copyright">© RMG FZC LIMITED</p>
</footer>

<?php wp_footer(); ?>
<style>
    .home-banner {
        background-image: url(<?php echo get_template_directory_uri() . "/assets/imgs/purple-planet.webp"; ?>);
    }
    .home-banner__title {
        background-image: url(<?php echo get_template_directory_uri() . "/assets/svgs/bg-title.svg"; ?>);
    }
    .call-to-action {
        background-image: url(<?php echo get_template_directory_uri() . "/assets/imgs/contact-blurred.png"; ?>);
    }
 /*    .call-to-action__content {
        background-image: url(<?php echo get_template_directory_uri() . "/assets/imgs/contact-clear.png"; ?>);
    } */
    .call-to-action__content:before {
        background-image: url(<?php echo get_template_directory_uri() . "/assets/imgs/contact-clear.png"; ?>);
    }
</style>
</body>

</html>