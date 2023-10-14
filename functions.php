<?php
    /* 
    Filename: functions.php
    Description: Let WP load the functions, includes files
    Modification History: 
    */

    function patsfarmsGC_files(){
            wp_enqueue_style('patsfarmGC_main_styles',get_stylesheet_directory_uri() . '/assets/css/patsfarmsGC.css');
            wp_enqueue_style('noscript-styles', get_stylesheet_directory_uri() . '/assets/css/noscript.css');
            wp_enqueue_style('favicon', get_stylesheet_directory_uri() . '/favicon.ico', array(), false, 'all');
            wp_enqueue_style('fontawesome', '//use.fontawesome.com/releases/v5.0.7/css/all.css');
            echo '<link rel="icon" type="image/x-icon" href="' . esc_url(get_stylesheet_directory_uri() . '/favicon.ico') . '" />' . "\n";
      }
    add_action('wp_enqueue_scripts','patsfarmsGC_files');

    add_theme_support('post-thumbnails');  

?>