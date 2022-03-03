<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'empty-wp-theme' ); ?></a>

    <header class="site-header">
        <nav role="navigation">
            <?php the_custom_logo(); ?>
            <button id="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'empty-wp-theme' ); ?></button>
            
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                    
                )
            );
            ?>
        </nav>
    </header>