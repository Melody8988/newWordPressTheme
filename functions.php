<?php

function newTheme_script_enqueue(){
    wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/css/newTheme.css', array(), 'all'); //TODO: include version
    wp_enqueue_script( 'customsjs', get_template_directory_uri() . '/js/newTheme.js', array(), true ); //TODO: include version
}

add_action( 'wp_enqueue_scripts', 'newTheme_script_enqueue');
//'wp_enqueue_scripts'

function newTheme_theme_setup(){
    
    add_theme_support( 'menus' );
     
    register_nav_menu( 'primary', 'Primary Header Navigation' );
    register_nav_menu( 'secondary', 'Footer Navigation' );
    

} 

add_action('after_setup_theme', 'newTheme_theme_setup');