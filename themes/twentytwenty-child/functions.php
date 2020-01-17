<?php

function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

wp_register_style('Boostrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
wp_enqueue_style('Boostrap4');