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
            $page_content = get_the_content();
            $page_id = get_the_ID();
            // Check if ACF function exists
            if (function_exists('get_field')) {
                // Get custom fields...
                $home = array( 
                    'address' => trim(get_field('address')),
                    'map_link' => trim(get_field('map_link')),
                    'telephone' => trim(get_field('telephone')),
                    'store_hours' => trim(get_field('store_hours')),
                    'facebook' => trim(get_field('facebook')),
                    'weekly_ads' => trim(get_field('weekly_ads')),
                    'seasonal_specials' => trim(get_field('seasonal_specials')),
                    'membership_rewards' => trim(get_field('membership_rewards'))
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