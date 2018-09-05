
<?php
	
    function newTheme_script_enqueue() {
        
        wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/newTheme.css', array(), '4.9.8', 'all');
        wp_enqueue_script('customjs', get_template_directory_uri() . '/js/newTheme.js', array(), '4.9.8', true);
        
    }
    add_action( 'wp_enqueue_scripts', 'newTheme_script_enqueue');
    
    function newTheme_theme_setup() {
        
        register_nav_menus( array( 
            'header' => 'Header menu', 
            'footer' => 'Footer menu' 
          ) );
         }
        
    add_action( 'after_setup_theme', 'newTheme_theme_setup' );