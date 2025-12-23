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

    // HOME STYLES
    // wp_enqueue_style(
    //     'theme-home-style',
    //     get_template_directory_uri() . '/assets/css/home.css'
    // );
}
add_action('wp_enqueue_scripts', 'my_styles');


////////////////////////// JAVASCRIPTS //////////////////////////
