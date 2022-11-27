<?php

function theme_register_assets(): void
{
    wp_register_style('style', get_template_directory_uri() . '/assets/css/style.css', []);
    wp_register_style('links', get_template_directory_uri() . '/assets/css/links.css', []);
    wp_register_style('content', get_template_directory_uri() . '/assets/css/content.css', []);
    wp_register_style('inter', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap', []);
    wp_enqueue_style('style');
    wp_enqueue_style('links');
    wp_enqueue_style('content');
    wp_enqueue_style('inter');
}

function theme_title_separator (): string {
    return '|';
}

add_action('wp_enqueue_scripts', 'theme_register_assets');
add_filter('document_title_separator', 'theme_title_separator');