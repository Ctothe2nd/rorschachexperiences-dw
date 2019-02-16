<?php
// Create custom post types
function create_custom_post_types() {
	// create researcher post type
	register_post_type( 'research_team',
        array(
            'labels' => array(
                'name' => __( 'Research Team' ),
                'singular_name' => __( 'Researcher' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'research-team' ),
        )
	);
 	register_post_type( 'experiences',
        array(
            'labels' => array(
                'name' => __( 'Experiences' ),
                'singular_name' => __( 'Experience' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'Experiences' ),
        )
    );
}
add_action( 'init', 'create_custom_post_types' );
add_action( 'init', 'create_tag_taxonomies', 0 );

//create two taxonomies, genres and tags for the post type "tag"
function create_tag_taxonomies() 
{
  // Add new taxonomy, NOT hierarchical (like tags)
  $labels = array(
    'name' => _x( 'Tags', 'taxonomy general name' ),
    'singular_name' => _x( 'Tag', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Tags' ),
    'popular_items' => __( 'Popular Tags' ),
    'all_items' => __( 'All Tags' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Tag' ), 
    'update_item' => __( 'Update Tag' ),
    'add_new_item' => __( 'Add New Tag' ),
    'new_item_name' => __( 'New Tag Name' ),
    'separate_items_with_commas' => __( 'Separate tags with commas' ),
    'add_or_remove_items' => __( 'Add or remove tags' ),
    'choose_from_most_used' => __( 'Choose from the most used tags' ),
    'menu_name' => __( 'Tags' ),
  ); 

  register_taxonomy('tag','experiences',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'tag' ),
  ));
}
?>


