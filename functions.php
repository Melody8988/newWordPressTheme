<?php

function newTheme_script_enqueue_melody8988(){
    wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/css/newTheme.css', array(), 'all'); //TODO: include version
    wp_enqueue_script( 'customsjs', get_template_directory_uri() . '/js/newTheme.js', array(), true ); //TODO: include version
}

add_action( 'wp_enqueue_scripts', 'newTheme_script_enqueue_melody8988');