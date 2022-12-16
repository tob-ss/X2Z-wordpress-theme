<?php

function X2Z_theme_support() {
// Adds dynamic title tag support
add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'X2Z_theme_support');


function X2Z_menus() {

    $locations = array(
        'primary' => "Desktop Primary Left Sidebar",
    );

    register_nav_menus($locations);
}

add_action('init', 'X2Z_menus');


function X2Z_theme_register_styles() {


    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('X2Z_theme_style', get_template_directory_uri() . "/assets/css/styles.css", array(), '1.0', 'all');

}

add_action('wp_enqueue_scripts', 'X2Z_theme_register_styles' );


function X2Z_theme_register_scripts() {


    wp_enqueue_script('X2Z_theme_scripts',  get_template_directory_uri()."/assets/javascript/app.js", array(), '1.0', true);

    
}

add_action('wp_enqueue_scripts', 'X2Z_theme_register_scripts' );

function X2Z_widget_areas(){


    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
        ),
        array(
            'name' => 'Sidebar Area',
            'id' => 'sidebar-1',
            'description' => 'Sidebar Widget Area'
        )
    );
}


add_action('widgets_init', 'X2Z_widget_areas');

?>