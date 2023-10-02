

<?php
// Specify the page title you want to retrieve
$page_title = 'Test Page';
$page_slug = 'privacy-policy';

// Create a WP_Query to retrieve the page
$page_query = new WP_Query(array(
    'post_type' => 'page',          // Set the post type to 'page'
    'post_status' => 'publish',    	// Include only published pages
    'posts_per_page' => 1,         	// Limit to one page
    //'title' => $page_title,        	// Specify the page title
	'name' => $page_slug       		// Specify the slug name
));

// Check if the query has any posts
if ($page_query->have_posts()) {
    // Loop through the posts (there should be only one)
    while ($page_query->have_posts()) {
        $page_query->the_post();

        // You can access the page content and other details here
        $page_content = get_the_content();
        $page_id = get_the_ID();

        // Output the page content
        echo "<h1>$page_title</h1>";
        echo $page_content;
    }

    // Restore the global post data
    wp_reset_postdata();
} else {
    echo "No page found with the title '$page_title'";
}
?>



