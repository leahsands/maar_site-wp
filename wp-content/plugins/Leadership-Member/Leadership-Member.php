<?php
/*
Plugin Name: Leadership
Plugin URI: http://wp.tutsplus.com/
Description: Declares a plugin that will create a custom post type displaying leadership Members.
Version: 1.0
Author: Soumitra Chakraborty
Author URI: http://wp.tutsplus.com/
License: GPLv2
*/
add_action( 'init', 'create_leadership_member' );

function create_leadership_member() {
    register_post_type( 'leadership_post',
        array(
            'labels' => array(
                'name' => 'Leadership',
                'singular_name' => 'Leadership',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Leadership',
                'edit' => 'Edit',
                'edit_item' => 'Edit Leadership',
                'new_item' => 'New leadership',
                'view' => 'View',
                'view_item' => 'View Leadership',
                'search_items' => 'Search Leadership',
                'not_found' => 'No Leadership found',
                'not_found_in_trash' => 'No Leadership found in Trash',
                'parent' => 'Parent Leadership'
            ),
 
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title', 'thumbnail' ),
            'taxonomies' => array( '' ),
            'menu_icon' => plugins_url( 'img/leadership-member.png', __FILE__ ),
            'has_archive' => true
        )
    );
}

function display_leadership_member_meta_box( $leadership_member ) {
    // Retrieve current name of the position and leadership Member email based on review ID
    $leadership_position = esc_html( get_post_meta( $leadership_member->ID, 'leadership_position', true ) );
    $leadership_phone =  esc_html( get_post_meta( $leadership_member->ID, 'leadership_phone', true ) );
    $leadership_email =  esc_html( get_post_meta( $leadership_member->ID, 'leadership_email', true ) );
    $leadership_category = get_post_meta( $leadership_member->ID, 'leadership_category', true );
    ?>
    <table>
        <tr>
            <td style="width: 50%">Leadership Member Position - <small>(Capitalize all nouns in Position Title)</small></td>
            <td style="width: 50%"><input type="text" size="80" name="leadership_member_position_name" value="<?php echo $leadership_position; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 50%">Leadership Member Email</td>
            <td style="width: 50%"><input type="email" size="80" name="leadership_member_email_name" value="<?php echo $leadership_email; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 50%">Category</td>
            <td style="width: 25%">
                <select name="leadership_member_category" id="leadership_member_category">
                <?php

                $array = array( "Officer", "Director" );
                foreach( $array as $category ) {
                ?>
                    <option value="<?php echo $category; ?>" <?php echo selected( $leadership_category, $category ); ?>>
                        <?php echo date('Y'); ?> <?php echo $category; } ?>
                    </option>
                </select>
            </td>
        </tr>
    </table>

<?php
}

add_action( 'save_post', 'add_leadership_member_fields', 10, 2 );

function add_leadership_member_fields( $leadership_member_id, $leadership_member ) {
    // Check post type for leadership Members
    if ( $leadership_member->post_type == 'leadership_post' ) {
        // Store data in post meta table if present in post data
        if ( isset( $_POST['leadership_member_position_name'] ) && $_POST['leadership_member_position_name'] != '' ) {
            update_post_meta( $leadership_member_id, 'leadership_position', $_POST['leadership_member_position_name'] );
        }
        if ( isset( $_POST['leadership_member_email_name'] ) && $_POST['leadership_member_email_name'] != '' ) {
            update_post_meta( $leadership_member_id, 'leadership_email', $_POST['leadership_member_email_name'] );
        }
        if ( isset( $_POST['leadership_member_category'] ) && $_POST['leadership_member_category'] != '' ) {
            update_post_meta( $leadership_member_id, 'leadership_category' , $_POST['leadership_member_category'] );
        }
    }
}

?>