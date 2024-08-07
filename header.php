<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="header">
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Our Services</a></li>
            <li><a href="">Storage & Security</a></li>
            <img src="<?php echo get_template_directory_uri() . "/assets/imgs/logo-dark-large.png"; ?>" alt="FMG FZC logo" class="primary-logo">
            <li><a href="">How It Works</a></li>
            <li><a href="">Legal & Compliance</a></li>
            <li><a href="">Contact Us</a></li>
        </ul>
    </header>