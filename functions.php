<?php

function foodreviews_theme_support (){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
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
    wp_enqueue_style('foodreviews-style', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css", array(), $version, 'all');
    wp_enqueue_style('foodreviews-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'foodreviews_register_styles');

function add_additional_class_on_a($classes, $item, $args)
{
    if (isset($args->add_a_class)) {
        $classes['class'] = $args->add_a_class;
    }
    return $classes;
}

add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);


function foodreviews_register_scripts (){
    wp_enqueue_script('foodreviews-bsscript', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js", array(), '3.4.1', true);
    wp_enqueue_script('foodreviews-script', get_template_directory_uri() . "/assets/js/script.js", array(), '3.4.1', true);
}

add_action('wp_enqueue_scripts', 'foodreviews_register_scripts');

function foodreviews_widget_areas(){
    register_sidebar(
        array(
            'before_title'=> '<h2>',
            'after_title'=> '</h2>',
            'before_widget'=> '',
            'after_widget'=> '',
            'name' => 'Sidebar Area',
            'id' => 'sidebar-1',
            'description' => 'Sidebar Widget Area',
        )
    );
    register_sidebar(
        array(
            'before_title'=> '<h2>',
            'after_title'=> '</h2>',
            'before_widget'=> '',
            'after_widget'=> '',
            'name' => 'Footer Area',
            'id' => 'footer-1',
            'description' => 'Footer Widget Area',
        )
    );
}

add_action('widgets_init', 'foodreviews_widget_areas');

?>