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
add_action( 'init', 'create_report_year' );

function create_report_year() {
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


function display_report_year_meta_box( $report_year ) {
    // Retrieve current name of the position and leadership Member email based on review ID
    $year_of_report = get_post_meta( $report_year->ID, 'year_of_report', true );
    ?>
    <table>
        <tr>
            <td style="width: 50%">Year of Report</td>
            <td style="width: 50%">
                <select id="report_year_year_of_report_name" name="report_year_year_of_report_name">
                <?php

                $ind_year = range(date('Y'), 2000);
                rsort($ind_year);

                foreach ($ind_year as $year ) {
                ?>
                    <option value="<?php echo $year; ?>" <?php echo selected( $year_of_report, $year ); ?>>
                        <?php echo $year; } ?>
                    </option>
                </select>
            </td>
        </tr>
    </table>

<?php
}

add_action( 'save_post', 'add_report_year_fields', 10, 2 );

function add_report_year_fields( $report_year_id, $report_year ) {
    // Check post type for leadership Members
    if ( $report_year->post_type == 'report_html' ) {
        // Store data in post meta table if present in post data

        if ( isset( $_POST['report_year_year_of_report_name'] ) && $_POST['report_year_year_of_report_name'] != '' ) {
            update_post_meta( $report_year_id, 'year_of_report' , $_POST['report_year_year_of_report_name'] );
        }
    }
}

?>