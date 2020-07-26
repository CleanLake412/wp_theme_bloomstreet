<?php
    add_theme_support( 'menus' );

    function wpb_custom_new_menu() {
        register_nav_menu('header-menu', 'Header Menu');
        register_nav_menu('footer-menu', 'Footer Menu');
    }
    add_action( 'init', 'wpb_custom_new_menu' );