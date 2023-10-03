<?php
// Retrieve the Home page
function read_WPfields($page_slug) {
    // Create a WP_Query to retrieve the page
    $page_query = new WP_Query(array(
        'post_type' => 'page',          // Set the post type to 'page'
        'post_status' => 'publish',    	// Include only published pages
        'posts_per_page' => 1,         	// Limit to one page
        //'title' => $page_title,       // Specify the page title
        'name' => $page_slug       		// Specify the slug name
    ));

    // If the page exists...
    if ($page_query->have_posts()) {
        // Loop through the posts (there should be only one)
        while ($page_query->have_posts()) {
            $page_query->the_post();
            if (function_exists('get_field')) {        
                
                // make sure ad url is not null or it will page error.
                if (!empty($weekly_ads = get_field('weekly_ads'))) 
                    $ad_url = $weekly_ads['url'];
                else 
                    $ad_url='#';
                $home = array( 
                    'address' => trim(get_field('address')),
                    'map_link' => trim(get_field('map_link')),
                    'telephone' => trim(get_field('telephone')),
                    'store_hours' => trim(get_field('store_hours')),
                    'facebook' => trim(get_field('facebook')),
                    'weekly_ads_url' => $ad_url
                );
                return $home;
            } else {
                echo '<p>ACF plugin is not installed or activated.</p>';
            }
        }
        // Restore the global post data
        wp_reset_postdata();
    } else {
        echo "No page found with the title '$page_title'";
    }
}

?>