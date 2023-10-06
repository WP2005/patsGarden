<!--
	Website: Patsfarmsgardencenter.com
    Filename: functions.php
	Description: loads dependencies (i.e. css, js, etc.)
	First released: 10.5.2023 
	Modification History: 
-->
<?php
    function patsfarmsGC_files(){
        //This function links a script file to the generated page at the right time according to the script dependencies, if the script has not been already included and if all the dependencies have been registered.
            // wp_enqueue_script('name', filename, dependency, version, load before body closing tag?)

            wp_enqueue_style('patsfarmGC_main_styles',get_stylesheet_directory_uri() . '/assets/css/patsfarmsGC.css');
            wp_enqueue_style('noscript-styles', get_stylesheet_directory_uri() . '/assets/css/noscript.css');
            wp_enqueue_style('favicon', get_stylesheet_directory_uri() . '/favicon.ico', array(), false, 'all');
            wp_enqueue_style('fontawesome', '//use.fontawesome.com/releases/v5.0.7/css/all.css');
            wp_enqueue_style('fontawesome', '//use.fontawesome.com/releases/v5.0.7/css/all.css');
      }
    add_action('wp_enqueue_scripts','patsfarmsGC_files');
    add_theme_support('post-thumbnails'); // Enable set feature image function

?>




		

