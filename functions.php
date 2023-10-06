<?php

function foodreviews_register_styles (){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('foodreviews-style', get_template_directory_uri() . "/assets/css/style.css", array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'foodreviews_register_styles');


function foodreviews_register_scripts (){
    wp_enqueue_script('foodreviews-script', get_template_directory_uri() . "/assets/js/script.js", array(), '3.4.1', true);
}

add_action('wp_enqueue_scripts', 'foodreviews_register_scripts');

?>