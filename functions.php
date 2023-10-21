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
    wp_enqueue_style('foodreviews-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'foodreviews_register_styles');




function foodreviews_register_scripts (){
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
            'before_widget'=> '<div class="footer-list">',
            'after_widget'=> '</div>',
            'name' => 'Footer Area',
            'id' => 'footer-1',
            'description' => 'Footer Widget Area',
        )
    );
}

add_action('widgets_init', 'foodreviews_widget_areas');

function wpdocs_excerpt_more( $more ) {
	if ( ! is_single() ) {
		$more = sprintf( '<span>...</span><br><a class="read-more" href="%1$s">%2$s</a>',
			get_permalink( get_the_ID() ),
			__( 'Read More', 'textdomain' )
		);
	}

	return $more;
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

?>