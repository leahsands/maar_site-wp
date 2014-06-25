<?php
/*
Plugin Name: Reports for MAAR
Plugin URI: 
Description: Declares a plugin that will create a custom post type displaying Reports.
Version: 1.0
Author: 
Author URI:
License: 
*/
add_action( 'init', 'create_report_html' );

function create_report_html() {
    register_post_type( 'report_html',
        array(
            'labels' => array(
                'name' => 'Reports',
                'singular_name' => 'Report',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Report',
                'edit' => 'Edit',
                'edit_item' => 'Edit Report',
                'new_item' => 'New Report',
                'view' => 'View',
                'view_item' => 'View Report',
                'search_items' => 'Search Reports',
                'not_found' => 'No Newsletter found',
                'not_found_in_trash' => 'No Reports found in Trash',
                'parent' => 'Parent Report'
            ),
 
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title', 'thumbnail' ),
            'taxonomies' => array( '' ),
            'menu_icon' => plugins_url( 'img/report-pdf.png', __FILE__ ),
            'has_archive' => true
        )
    );
}


?>