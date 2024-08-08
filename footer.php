<footer class="footer">

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