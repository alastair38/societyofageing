<?php
/* custom post-type for storing member contributions

*/

function rc11_contributions() {
	// creating (registering) the custom type
	register_post_type( 'contributions', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Member Contributions', 'rc11theme'), /* This is the Title of the Group */
			'singular_name' => __('Member Contribution', 'rc11theme'), /* This is the individual type */
			'all_items' => __('All Member Contributions', 'rc11theme'), /* the all items menu item */
			'add_new' => __('Add New Contribution', 'rc11theme'), /* The add new menu item */
			'add_new_item' => __('Add New Contribution', 'rc11theme'), /* Add New Display Title */
			'edit' => __( 'Edit', 'rc11theme' ), /* Edit Dialog */
			'edit_item' => __('Edit Contribution', 'rc11theme'), /* Edit Display Title */
			'new_item' => __('New Contribution', 'rc11theme'), /* New Display Title */
			'view_item' => __('View Contribution', 'rc11theme'), /* View Display Title */
			'search_items' => __('Search Contributions', 'rc11theme'), /* Search Custom Type Title */
			'not_found' =>  __('Nothing found in the Database.', 'rc11theme'), /* This displays if there are no entries yet */
			'not_found_in_trash' => __('Nothing found in Trash', 'rc11theme'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'RC11 Member Contributions', 'rc11theme' ), /* Custom Type Description */

			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 6, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => 'dashicons-clipboard', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'contributions', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => true, /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor')
	 	) /* end of options */
	); /* end of register post type */


}
	// adding the function to the Wordpress init
	add_action( 'init', 'rc11_contributions');


 register_taxonomy( 'contribution_type',
    	array('contributions'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    	array('hierarchical' => true,     /* if this is true, it acts like categories */
    		'labels' => array(
    			'name' => __( 'Contribution Types', 'rc11theme' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'Contribution Type', 'rc11theme' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search Contribution Types', 'rc11theme' ), /* search title for taxomony */
    			'all_items' => __( 'All Contribution Types', 'rc11theme' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Type', 'rc11theme' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Type:', 'rc11theme' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Contribution Type', 'rc11theme' ), /* edit custom taxonomy title */
    			'update_item' => __( 'Update Contribution Type', 'rc11theme' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New Contribution Type', 'rc11theme' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Contribution Type Name', 'rc11theme' ) /* name title for taxonomy */
    		),
    		'show_admin_column' => true,
    		'show_ui' => true,
    		'query_var' => true,
    		'rewrite' => array( 'slug' => 'contribution' ),
    	)
    );


    /*
    	looking for custom meta boxes?
    	check out this fantastic tool:
    	https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
    */


?>
