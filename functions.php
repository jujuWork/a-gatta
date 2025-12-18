<?php

function my_styles()
{
    $theme_version = '1.0.0';
    $css_path = get_template_directory_uri() . '/assets/css';

    // STYLE STYLES
    wp_enqueue_style(
        'theme-style-style',
        get_template_directory_uri() . '/style.css'
    );

    // MAIN STYLES
    wp_enqueue_style(
        'theme-main-style',
        get_template_directory_uri() . '/assets/css/main.css'
    );

    // HEADER STYLES
    wp_enqueue_style(
        'theme-header-style',
        get_template_directory_uri() . '/assets/css/header.css'
    );

    // FOOTER STYLES
    wp_enqueue_style(
        'theme-footer-style',
        get_template_directory_uri() . '/assets/css/footer.css'
    );

    // TOP-PAGE STYLES
    wp_enqueue_style(
        'theme-content-style',
        get_template_directory_uri() . '/assets/css/forum.css'
    );

    //NAVIGATION STYLE
    wp_enqueue_style(
        'theme-navigation-style',
        get_template_directory_uri() . '/assets/css/nav.css'
    );
}
add_action('wp_enqueue_scripts', 'my_styles');
