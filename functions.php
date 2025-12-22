<?php
////////////////////////// CSS STYLES //////////////////////////

function my_styles()
{
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
        get_template_directory_uri() . '/assets/css/product.css'
    );

    //NAVIGATION STYLE
    wp_enqueue_style(
        'theme-navigation-style',
        get_template_directory_uri() . '/assets/css/nav.css'
    );
}
add_action('wp_enqueue_scripts', 'my_styles');


////////////////////////// JAVASCRIPTS //////////////////////////

function my_theme_scripts()
{
    //NAV SCRIPTS
    wp_enqueue_script(
        'my-nav-js',
        get_template_directory_uri() . '/assets/js/nav.js'
    );
}
