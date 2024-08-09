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
        <?php
        wp_nav_menu(array(
            'theme_location' => 'header-menu-left',
        ));
        ?>
        <img src="<?php echo get_template_directory_uri() . "/assets/imgs/logo-dark-large.png"; ?>" alt="FMG FZC logo" class="primary-logo">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'header-menu-right',
        ));
        ?>
        <img src="<?php echo get_template_directory_uri() . "/assets/svgs/burger.svg"; ?>" alt="FMG FZC logo" class="burger-menu" id="openPopup">
    </header>