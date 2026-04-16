<?php

function mytheme_enqueue_assets() {

    
    wp_enqueue_style(
        'tailwind-css',
        get_template_directory_uri() . '/assets/css/tailwind.css',
        array(),
        filemtime(get_template_directory() . '/assets/css/tailwind.css'),
        'all'
    );

    
    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        filemtime(get_template_directory() . '/assets/js/main.js'),
        true
    );
}

add_action('wp_enqueue_scripts', 'mytheme_enqueue_assets');