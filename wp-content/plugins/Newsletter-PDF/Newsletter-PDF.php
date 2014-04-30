<?php
/*
Plugin Name: Newsletter PDFs
Plugin URI: http://wp.tutsplus.com/
Description: Declares a plugin that will create a custom post type displaying Newsletter PDFs.
Version: 1.0
Author: Soumitra Chakraborty
Author URI: http://wp.tutsplus.com/
License: GPLv2
*/
add_action( 'init', 'create_newsletter_pdf' );

function create_newsletter_pdf() {
    register_post_type( 'newsletter_pdf',
        array(
            'labels' => array(
                'name' => 'Newsletter PDFs',
                'singular_name' => 'Newsletter PDF',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Newsletter PDF',
                'edit' => 'Edit',
                'edit_item' => 'Edit Newsletter PDF',
                'new_item' => 'New Newsletter PDF',
                'view' => 'View',
                'view_item' => 'View Newsletter PDF',
                'search_items' => 'Search Newsletter PDFs',
                'not_found' => 'No Newsletter PDFs found',
                'not_found_in_trash' => 'No Newsletter PDFs found in Trash',
                'parent' => 'Parent Newsletter PDF'
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