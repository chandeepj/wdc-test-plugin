<?php 
/**
 * Register CPT
 */

add_action( 'init', 'wdc_register_post_type' );

/**
 * Register CPT
 */
function wdc_register_post_type() {

    $labels = [
        'name'                  => _x( 'WDC Demos', 'Post type general name', 'wdc-test-plugin' ),
        'singular_name'         => _x( 'WDC Demo', 'Post type singular name', 'wdc-test-plugin' ),
        'menu_name'             => _x( 'WDC Demos', 'Admin Menu text', 'wdc-test-plugin' ),
        'name_admin_bar'        => _x( 'WDC Demo', 'Add New on Toolbar', 'wdc-test-plugin' ),
        'add_new'               => __( 'Add New', 'wdc-test-plugin' ),
        'add_new_item'          => __( 'Add New WDC Demo', 'wdc-test-plugin' ),
        'new_item'              => __( 'New WDC Demo', 'wdc-test-plugin' ),
        'edit_item'             => __( 'Edit WDC Demo', 'wdc-test-plugin' ),
        'view_item'             => __( 'View WDC Demo', 'wdc-test-plugin' ),
        'all_items'             => __( 'All WDC Demos', 'wdc-test-plugin' ),
        'search_items'          => __( 'Search WDC Demos', 'wdc-test-plugin' ),
        'parent_item_colon'     => __( 'Parent WDC Demos:', 'wdc-test-plugin' ),
        'not_found'             => __( 'No WDC Demos found.', 'wdc-test-plugin' ),
        'not_found_in_trash'    => __( 'No WDC Demos found in Trash.', 'wdc-test-plugin' ),
        'featured_image'        => _x( 'WDC Demo Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'wdc-test-plugin' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'wdc-test-plugin' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'wdc-test-plugin' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'wdc-test-plugin' ),
        'archives'              => _x( 'Review archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'wdc-test-plugin' ),
        'insert_into_item'      => _x( 'Insert into WDC Demo', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'wdc-test-plugin' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this WDC Demo', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'wdc-test-plugin' ),
        'filter_items_list'     => _x( 'Filter WDC Demos list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'wdc-test-plugin' ),
        'items_list_navigation' => _x( 'WDC Demos list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'wdc-test-plugin' ),
        'items_list'            => _x( 'WDC Demos list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'wdc-test-plugin' ),
    ];

    $args = [
        'labels'             => $labels,
        'public'             => true,
        // 'publicly_queryable' => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'menu_icon'          => 'dashicons-code-standards',
        'query_var'          => false,
        'rewrite'            => false,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => [ 'title', 'editor' ],
    ];

    register_post_type( 'wdc-demo', $args );
}
