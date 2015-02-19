<?php
/*
Plugin Name: Newsletters for MAAR
Plugin URI: 
Description: Declares a plugin that will create a custom post type displaying Newsletters.
Version: 1.0
Author: 
Author URI:
License: 
*/
add_action( 'init', 'create_newsletter_html' );

function create_newsletter_html() {
    register_post_type( 'newsletter_html',
        array(
            'labels' => array(
                'name' => 'Newsletter',
                'singular_name' => 'Newsletter',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Newsletter',
                'edit' => 'Edit',
                'edit_item' => 'Edit Newsletter',
                'new_item' => 'New Newsletter',
                'view' => 'View',
                'view_item' => 'View Newsletter',
                'search_items' => 'Search Newsletters',
                'not_found' => 'No Newsletter found',
                'not_found_in_trash' => 'No Newsletters found in Trash',
                'parent' => 'Parent Newsletter'
            ),
 
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title', 'thumbnail' ),
            'taxonomies' => array( '' ),
            'menu_icon' => plugins_url( 'img/newsletter-pdf.png', __FILE__ ),
            'has_archive' => true
        )
    );
}


?>