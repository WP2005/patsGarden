<?php


function get_home() {
    // Create a WP_Query to retrieve the page
    $page_query = new WP_Query(array(
        'post_type' => 'page',          // Set the post type to 'page'
        'post_status' => 'publish',    	// Include only published pages
        'posts_per_page' => 1,         	// Limit to one page
        'name' => 'home'      		    // Specify the slug name
    ));
    // If the page exists...
    if ($page_query->have_posts()) {
        // Loop through the posts (there should be only one)
        while ($page_query->have_posts()) {
            $page_query->the_post();
            if (function_exists('get_field')) {        
                // make sure ad url is not null or it will page error.
                if (!empty($weekly_ads = get_field('weekly_ads') ) ) 
                    $ad_url = trim(esc_attr($weekly_ads['url']));
                else  $ad_url='#';
                $page_fields = array( 
                    'address'       => trim(esc_attr(get_field('address'))),
                    'map_link'      => trim(esc_attr(get_field('map_link'))),
                    'telephone'     => trim(esc_attr(get_field('telephone'))),
                    'store_hours'   => trim(esc_attr(get_field('store_hours'))),
                    'facebook'      => trim(esc_attr(get_field('facebook'))),
                    'weekly_ads_url' => $ad_url
                );
                return $page_fields;
            } else {
                echo '<p>********* Error: ACF plugin is not installed or activated.*******</p> ';
            }
        }
        // Restore the global post data
        wp_reset_postdata();
    } else {
        echo '<p>********* Error: Home page not found.*******</p> ';
    }
}

function get_about() {
    // Create a WP_Query to retrieve the page
    $page_query = new WP_Query(array(
        'post_type' => 'page',          // Set the post type to 'page'
        'post_status' => 'publish',    	// Include only published pages
        'posts_per_page' => 1,         	// Limit to one page
        'name' => 'about-us'      		    // Specify the slug name
    ));
    // If the page exists...
    if ($page_query->have_posts()) {
        // Loop through the posts (there should be only one)
        while ($page_query->have_posts()) {
            $page_query->the_post();
            $page_content = esc_attr(get_the_content());
            
            if (has_post_thumbnail()){  // Check if a featured image exists
                //echo get_the_post_thumbnail();
                $thumbnail_id = get_post_thumbnail_id();
                $image_url = wp_get_attachment_image_src($thumbnail_id, 'full');
                $image_url = $image_url[0];
            }
            else 
                echo '<img src="path-to-your-fallback-image.jpg" alt="Fallback Image" />';

            $page_fields = array( 
                'title' => esc_attr(get_the_title()),
                'content' => $page_content,
                'image_url' => $image_url
            );
            return $page_fields;    
        }
        // Restore the global post data
        wp_reset_postdata();
    } else {
        echo  '<p>********* Error: About  page not found.*******</p> ';
    }
}

function get_whatwecarry() {
    // Create a WP_Query to retrieve the page
    $page_query = new WP_Query(array(
        'post_type' => 'page',          // Set the post type to 'page'
        'post_status' => 'publish',    	// Include only published pages
        'posts_per_page' => 1,         	// Limit to one page
        'name' => 'what-we-carry'      		    // Specify the slug name
    ));
    // If the page exists...
    if ($page_query->have_posts()) {
        // Loop through the posts (there should be only one)
        while ($page_query->have_posts()) {
            $page_query->the_post();
            $page_content = esc_attr(get_the_content());
            
            if (has_post_thumbnail()){  // Check if a featured image exists
                //echo get_the_post_thumbnail();
                $thumbnail_id = get_post_thumbnail_id();
                $image_url = wp_get_attachment_image_src($thumbnail_id, 'full');
                $image_url = $image_url[0];
            }
            else 
                $image_url = "#";

            $page_fields = array( 
                'title' => esc_attr(get_the_title()),
                'content' => $page_content,
                'image_url' => $image_url
            );
            return $page_fields;    
        }
        // Restore the global post data
        wp_reset_postdata();
    } else {
        echo  '<p>********* Error: what-we-carry  page not found.*******</p> ';
    }
}

function get_specials() {
    // Create a WP_Query to retrieve the page
    $page_query = new WP_Query(array(
        'post_type' => 'page',          // Set the post type to 'page'
        'post_status' => 'publish',    	// Include only published pages
        'posts_per_page' => 1,         	// Limit to one page
        'name' => 'specials'      		    // Specify the slug name
    ));
    // If the page exists...
    if ($page_query->have_posts()) {
        // Loop through the posts (there should be only one)
        while ($page_query->have_posts()) {
            $page_query->the_post();
            $page_content = esc_attr(get_the_content());
            
            if (has_post_thumbnail()){  // Check if a featured image exists
                //echo get_the_post_thumbnail();
                echo "****** ";
                $thumbnail_id = get_post_thumbnail_id();
                $image_url = wp_get_attachment_image_src($thumbnail_id, 'full');
                $image_url = $image_url[0];
            }
            else 
                $image_url="#";

            $page_fields = array( 
                'title' => esc_attr(get_the_title()),
                'content' => $page_content,
                'image_url' => $image_url,
            );
            return $page_fields;    
        }
        // Restore the global post data
        wp_reset_postdata();
    } else {
        echo  '<p>********* Error: specials page not found.*******</p> ';
    }
}

function get_tips() {
    // Create a WP_Query to retrieve the page
    $page_query = new WP_Query(array(
        'post_type' => 'page',          // Set the post type to 'page'
        'post_status' => 'publish',    	// Include only published pages
        'posts_per_page' => 1,         	// Limit to one page
        'name' => 'tips'      		    // Specify the slug name
    ));
    // If the page exists...
    if ($page_query->have_posts()) {
        // Loop through the posts (there should be only one)
        while ($page_query->have_posts()) {
            $page_query->the_post();
            $page_content = esc_attr(get_the_content());
            
            if (has_post_thumbnail()){  // Check if a featured image exists
                //echo get_the_post_thumbnail();
                $thumbnail_id = get_post_thumbnail_id();
                $image_url = wp_get_attachment_image_src($thumbnail_id, 'full');
                $image_url = $image_url[0];
            }
            else 
                $image_url="#";

            $page_fields = array( 
                'title' => esc_attr(get_the_title()),
                'content' => $page_content,
                'image_url' => $image_url,
            );
            return $page_fields;    
        }
        // Restore the global post data
        wp_reset_postdata();
    } else {
        echo  '<p>********* Error: Tips page not found.*******</p> ';
    }
}

?>