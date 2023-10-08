<?php 
    get_header();  // Read WP header.phpasdfasf
    $pagename="what-we-carry"
    echo "<br>+++++++++++++++++  " . $pagename;
    $page_query = new WP_Query(array(
        'post_type' => 'page',          // Set the post type to 'page'
        'post_status' => 'publish',    	// Include only published pages
        'posts_per_page' => 1,         	// Limit to one page
        'name' => $pagename  		    // Specify the slug name
    ));
    

        if (have_rows('', $page_id)) {
            echo "<br>############################### " . $page_id;
            $field_keys = array_keys(get_fields($page_id));
            $acf_photos = array();
            foreach ($field_keys as $field_key) {
                // Get the field value using the field key
                echo "<br>!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!  " . $page_id;
                $field_value = get_field($field_key, $page_id);
                // Make sure it's a photo field...
                if (strpos($field_key, 'photo_') === 0) { 
                    $acf_photo_url=get_field($field_key, $page_id);
                    $acf_photos[$field_key] = $acf_photo_url;
                    echo '****** Field key: "' . $field_key . ' - ' . $acf_photo_url;
                } else {
                    $acf_photos[$field_key] = '#'; // No photo.
                }
            }
        }
        else {
            echo "<br>*********************** test " . $page_id;
            $acf_photos['photo_1'] = '#';
            $acf_photos['photo_2'] = '#';
            $acf_photos['photo_3'] = '#';
            $acf_photos['photo_4'] = '#';
        }

        //----- Create return field data array....
        $page_fields = array( 
            'title' => esc_attr(get_the_title()),
            'content' => $page_content,
            'featured_img_url' => $featured_img_url
        );
        $page_fields['acf_photos'] = $acf_photos;

 get_footer();
 
 ?>




