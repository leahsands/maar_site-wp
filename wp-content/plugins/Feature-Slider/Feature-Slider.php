<?php
/*
Plugin Name: Feature Images
Plugin URI: http://wp.tutsplus.com/
Description: Declares a plugin that will create a custom post type displaying Feature Images.
Version: 1.0
Author: Soumitra Chakraborty
Author URI: http://wp.tutsplus.com/
License: GPLv2
*/
add_action( 'init', 'create_feature_image' );

function create_feature_image() {
    register_post_type( 'feat_img',
        array(
            'labels' => array(
                'name' => 'Feature Images',
                'singular_name' => 'Feature Image',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Feature Image',
                'edit' => 'Edit',
                'edit_item' => 'Edit Feature Image',
                'new_item' => 'New Feature Image',
                'view' => 'View',
                'view_item' => 'View Feature Image',
                'search_items' => 'Search Feature Images',
                'not_found' => 'No Feature Images found',
                'not_found_in_trash' => 'No Feature Images found in Trash',
                'parent' => 'Parent Feature Image'
            ),
 
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title'),
            'taxonomies' => array( '' ),
            'menu_icon' => plugins_url( 'img/feature-image.png', __FILE__ ),
            'has_archive' => true
        )
    );
}

function display_feature_image_meta_box( $feature_image ) {
    // Retrieve current name of the position and Feature Image email based on review ID
    $large_caption = esc_html( get_post_meta( $feature_image->ID, 'large_caption', true ) );
    $small_caption =  esc_html( get_post_meta( $feature_image->ID, 'small_caption', true ) );
    $button_link =  esc_html( get_post_meta( $feature_image->ID, 'button_link', true ) );
    $button_caption = get_post_meta( $feature_image->ID, 'button_caption', true );
    ?>
    <table>
        <tr>
            <td colspan="2"><p>**Remember to keep text in the feature slider short and to the point. There should be only one line of text in each filed**</p></td>
        </tr>
        <tr>
            <td style="width: 40%">Large Caption - <small>(Normally the title of the event)</small></td>
            <td style="width: 60%"><input type="text" size="80" name="feature_image_large-caption" value="<?php echo $large_caption; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 40%">Small Caption - <small>(Normally the info of the event)</small></td>
            <td style="width: 60%"><input type="text" size="80" name="feature_image_small-caption" value="<?php echo $small_caption; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 40%">Full Link of the Button - <small>(Already includes the 'http://')</td>
            <td style="width: 60%"><p style="float:left; margin-top: 5px;">http://</p><input style="float:left" type="text" size="50" name="feature_image_button-link" value="<?php echo $button_link; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 40%">Text on the Button</td>
            <td style="width: 60%"><input type="text" size="80" name="feature_image_button-caption" value="<?php echo $button_caption; ?>" /></td>
        </tr>
    </table>

<?php
}

add_action( 'save_post', 'add_feature_image_fields', 10, 2 );

function add_feature_image_fields( $feature_image_id, $feature_image ) {
    // Check post type for Feature Images
    if ( $feature_image->post_type == 'feat_img' ) {
        // Store data in post meta table if present in post data
        if ( isset( $_POST['feature_image_large-caption'] ) && $_POST['feature_image_large-caption'] != '' ) {
            update_post_meta( $feature_image_id, 'large_caption', $_POST['feature_image_large-caption'] );
        }
        if ( isset( $_POST['feature_image_small-caption'] ) && $_POST['feature_image_small-caption'] != '' ) {
            update_post_meta( $feature_image_id, 'small_caption', $_POST['feature_image_small-caption'] );
        }
        if ( isset( $_POST['feature_image_button-link'] ) && $_POST['feature_image_button-link'] != '' ) {
            update_post_meta( $feature_image_id, 'button_link', $_POST['feature_image_button-link'] );
            update_post_meta( $feature_image_id, 'button_caption' , $_POST['feature_image_button-caption'] );
        }
    }
}

?>