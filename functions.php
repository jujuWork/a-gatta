<?php
////////////////////////// CSS STYLES //////////////////////////

function my_styles()
{
    $theme_uri = get_template_directory_uri();
    $theme_path = get_template_directory();
    // STYLE STYLES
    wp_enqueue_style(
        'theme-style-style',
        $theme_uri . '/style.css',
        array(), // dependencies
        filemtime($theme_path . '/style.css') //version based on the file save time
    );

    // MAIN STYLES
    wp_enqueue_style(
        'theme-main-style',
        $theme_uri . '/assets/css/main.css',
        array(),
        filemtime($theme_path . '/assets/css/main.css')
    );

    // HEADER STYLES
    wp_enqueue_style(
        'theme-header-style',
        $theme_uri . '/assets/css/header.css',
        array(),
        filemtime($theme_path . '/assets/css/header.css')
    );

    // FOOTER STYLES
    wp_enqueue_style(
        'theme-footer-style',
        $theme_uri . '/assets/css/footer.css',
        array(),
        filemtime($theme_path . '/assets/css/footer.css')
    );

    // HOME STYLES
    wp_enqueue_style(
        'theme-home-style',
        $theme_uri . '/assets/css/home.css',
        array(),
        filemtime($theme_path . '/assets/css/home.css')
    );

    // MEDIA QUERIES
    wp_enqueue_style(
        'media-queries',
        $theme_uri . '/assets/css/media-queries/media.css',
        array(),
        filemtime($theme_path . '/assets/css/media-queries/media.css')
    );
}
add_action('wp_enqueue_scripts', 'my_styles');


////////////////////////// JAVASCRIPTS //////////////////////////
