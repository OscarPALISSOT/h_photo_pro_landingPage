<?php

function theme_register_assets(): void
{
    wp_register_style('style', get_template_directory_uri() . '/assets/css/style.css', []);
    wp_enqueue_style('Cormorant_Garamond_font','https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;1,300;1,400&display=swap' );
    wp_enqueue_style('style');
}

function theme_title_separator (): string {
    return '|';
}

add_action('wp_enqueue_scripts', 'theme_register_assets');
add_filter('document_title_separator', 'theme_title_separator');