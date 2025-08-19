<?php


// Register Custom Post Type
function tattoo_post_type() {

	$labels = array(
		'name'                  => _x( 'Tattoos', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Tattoo', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Tattoos', 'text_domain' ),
		'name_admin_bar'        => __( 'Tattoos', 'text_domain' ),
		'archives'              => __( 'Tattoo Archives', 'text_domain' ),
		'attributes'            => __( 'Tattoo Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Tattoo', 'text_domain' ),
		'all_items'             => __( 'All Tattoos', 'text_domain' ),
		'add_new_item'          => __( 'Add New Tattoos', 'text_domain' ),
		'add_new'               => __( 'Add Tattoo', 'text_domain' ),
		'new_item'              => __( 'New Tattoo', 'text_domain' ),
		'edit_item'             => __( 'Edit Tattoo', 'text_domain' ),
		'update_item'           => __( 'Update Tattoo', 'text_domain' ),
		'view_item'             => __( 'View Tattoo', 'text_domain' ),
		'view_items'            => __( 'View Tattoos', 'text_domain' ),
		'search_items'          => __( 'Search Tattoos', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Tattoo', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured Tattoo', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured Tattoo', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured Tattoo', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Tattoo', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Tattoo', 'text_domain' ),
		'items_list'            => __( 'Tattoos list', 'text_domain' ),
		'items_list_navigation' => __( 'Tattoos list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Tattoos list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Tattoo', 'text_domain' ),
		'description'           => __( 'All Tattoos Done on skin/fake skin/live video', 'text_domain' ),
		'labels'                => $labels,
		'supports' 				=> array('title', 'editor', 'thumbnail'),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-color-picker',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'tattoo', $args );

}
add_action( 'init', 'tattoo_post_type', 0 );
















// Register Custom Post Type
function flash_post_type() {

	$labels = array(
		'name'                  => _x( 'Flashes', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Flash', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Flashes', 'text_domain' ),
		'name_admin_bar'        => __( 'Flashes', 'text_domain' ),
		'archives'              => __( 'Flash Archives', 'text_domain' ),
		'attributes'            => __( 'Flash Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Flash', 'text_domain' ),
		'all_items'             => __( 'All Flashes', 'text_domain' ),
		'add_new_item'          => __( 'Add New Flashes', 'text_domain' ),
		'add_new'               => __( 'Add Flash', 'text_domain' ),
		'new_item'              => __( 'New Flash', 'text_domain' ),
		'edit_item'             => __( 'Edit Flash', 'text_domain' ),
		'update_item'           => __( 'Update Flash', 'text_domain' ),
		'view_item'             => __( 'View Flash', 'text_domain' ),
		'view_items'            => __( 'View Flashes', 'text_domain' ),
		'search_items'          => __( 'Search Flashes', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Flash', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured Flash', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured Flash', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured Flash', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Flash', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Flash', 'text_domain' ),
		'items_list'            => __( 'Flashes list', 'text_domain' ),
		'items_list_navigation' => __( 'Flashes list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Flashes list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Flash', 'text_domain' ),
		'description'           => __( 'All Flashes Done on skin/fake skin/live video', 'text_domain' ),
		'labels'                => $labels,
		'supports' 				=> array('title', 'editor', 'thumbnail'),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-images-alt2',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'flash', $args );

}
add_action( 'init', 'flash_post_type', 0 );







// Include post tags for custom post types
function register_custom_post_type_taxonomies() {
	register_taxonomy_for_object_type('post_tag', 'tattoo');
	register_taxonomy_for_object_type('post_tag', 'flash');


	register_taxonomy_for_object_type('category', 'tattoo');
	register_taxonomy_for_object_type('category', 'flash');

}
add_action('init', 'register_custom_post_type_taxonomies');

function custom_modify_search_query($query) {
	if ($query->is_search && !is_admin()) {
		// Specify the post types you want to search
		$query->set('post_type', ['post', 'page', 'product', 'tattoo', 'flash']);
		
		// Ensure that attachments are not included
		$query->set('post_status', 'publish'); // Search only published posts
	}
}
add_action('pre_get_posts', 'custom_modify_search_query');

