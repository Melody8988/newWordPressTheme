<?php

function newTheme_script_enqueue_melody8988(){
    wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/css/newTheme.css', array(), 'all'); //TODO: include version
    wp_enqueue_script( 'customsjs', get_template_directory_uri() . '/js/newTheme.js', array(), true ); //TODO: include version
}

add_action( 'wp_enqueue_scripts', 'newTheme_script_enqueue_melody8988');
//'wp_enqueue_scripts'

function newTheme_theme_setup_melody8988(){

    add_theme_support( 'menus' );
    register_nav_menu( 'primary', 'Primary Header Navigation' )

}

add_action('init', 'newTheme_theme_setup_melody8988');