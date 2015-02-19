<?php
/*
Plugin Name: Staff
Plugin URI: http://wp.tutsplus.com/
Description: Declares a plugin that will create a custom post type displaying Team Members.
Version: 1.0
Author: Soumitra Chakraborty
Author URI: http://wp.tutsplus.com/
License: GPLv2
*/
add_action( 'init', 'create_team_member' );

function create_team_member() {
    register_post_type( 'team_post',
        array(
            'labels' => array(
                'name' => 'Staff Members',
                'singular_name' => 'Staff Member',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Staff Member',
                'edit' => 'Edit',
                'edit_item' => 'Edit Staff Member',
                'new_item' => 'New Staff Member',
                'view' => 'View',
                'view_item' => 'View Staff Member',
                'search_items' => 'Search Staff Members',
                'not_found' => 'No Staff Members found',
                'not_found_in_trash' => 'No Staff Members found in Trash',
                'parent' => 'Parent Staff Member'
            ),
 
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title', 'thumbnail' ),
            'taxonomies' => array( '' ),
            'menu_icon' => plugins_url( 'img/team-member.png', __FILE__ ),
            'has_archive' => true
        )
    );
}

function display_team_member_meta_box( $team_member ) {
    // Retrieve current name of the position and Team Member email based on review ID
    $team_position = esc_html( get_post_meta( $team_member->ID, 'team_position', true ) );
    $team_phone =  esc_html( get_post_meta( $team_member->ID, 'team_phone', true ) );
    $team_email =  esc_html( get_post_meta( $team_member->ID, 'team_email', true ) );
    $team_category = get_post_meta( $team_member->ID, 'team_category', true );
    ?>
    <table>
        <tr>
            <td style="width: 50%">Team Member Position - <small>(Capitalize all nouns in Position Title)</small></td>
            <td style="width: 50%"><input type="text" size="80" name="team_member_position_name" value="<?php echo $team_position; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 50%">Team Member Phone - <small>(Make sure the phone number is xxx.xxx.xxxx format)</small></td>
            <td style="width: 50%"><input type="tel" size="80" name="team_member_phone_name" value="<?php echo $team_phone; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 50%">Team Member Email</td>
            <td style="width: 50%"><input type="email" size="80" name="team_member_email_name" value="<?php echo $team_email; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 50%">Category</td>
            <td style="width: 25%">
                <select name="team_member_category" id="team_member_category">
                <?php

                $array = array( "executive", "public-affairs", "accounting", "broker-services", "education", "marketing", "member-services", "membership", "research" );
                foreach( $array as $category ) {
                ?>
                    <option value="<?php echo $category; ?>" <?php echo selected( $team_category, $category ); ?>>
                        <?php echo $category; } ?>
                    </option>
                </select>
            </td>
        </tr>
    </table>

<?php
}

add_action( 'save_post', 'add_team_member_fields', 10, 2 );

function add_team_member_fields( $team_member_id, $team_member ) {
    // Check post type for Team Members
    if ( $team_member->post_type == 'team_post' ) {
        // Store data in post meta table if present in post data
        if ( isset( $_POST['team_member_position_name'] ) && $_POST['team_member_position_name'] != '' ) {
            update_post_meta( $team_member_id, 'team_position', $_POST['team_member_position_name'] );
        }
        if ( isset( $_POST['team_member_phone_name'] ) && $_POST['team_member_phone_name'] != '' ) {
            update_post_meta( $team_member_id, 'team_phone', $_POST['team_member_phone_name'] );
        }
        if ( isset( $_POST['team_member_email_name'] ) && $_POST['team_member_email_name'] != '' ) {
            update_post_meta( $team_member_id, 'team_email', $_POST['team_member_email_name'] );
        }
        if ( isset( $_POST['team_member_category'] ) && $_POST['team_member_category'] != '' ) {
            update_post_meta( $team_member_id, 'team_category' , $_POST['team_member_category'] );
        }
    }
}

?>