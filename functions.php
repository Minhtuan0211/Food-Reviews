<?php

function foodreviews_theme_support (){
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'foodreviews_theme_support');

function foodreviews_menus(){

    $locations = array(
        'primary' => "Desktop Primary",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);
}

add_action('init', 'foodreviews_menus');

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