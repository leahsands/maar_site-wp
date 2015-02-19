<?php


$wplc_basic_plugin_url = get_option('siteurl')."/wp-content/plugins/wp-live-chat-support/";
function wplc_list_visitors($agent_id) {

    global $wpdb;
    global $wplc_tblname_chats;
    $wplc_c = 0;
    $results = $wpdb->get_results(
        "
	SELECT *
	FROM $wplc_tblname_chats
        WHERE `status` = 5 or `status` = 8 or `status` = 9
        ORDER BY `timestamp` DESC

	"
    );
    
    $table = "<table class=\"wp-list-table widefat fixed \" cellspacing=\"0\">"
                . "<thead>"
                    . "<tr>"
                        . "<th scope='col' id='wplc_id_colum' class='manage-column column-id sortable desc'  style=''><i class=\"fa fa-globe\"> </i> <span>".__("User Data","wplivechat")."</span></th>"
                        . "<th scope='col' id='wplc_name_colum' class='manage-column column-name_title sortable desc'  style=''><i class=\"fa fa-user\"> </i> <span>".__("Name","wplivechat")."</span></th>"
                        . "<th scope='col' id='wplc_email_colum' class='manage-column column-email' style=\"\"><i class=\"fa fa-envelope\"> </i> ".__("Email","wplivechat")."</th>"
                        . "<th scope='col' id='wplc_url_colum' class='manage-column column-url' style=\"\"><i class=\"fa fa-link\"> </i> ".__("URL","wplivechat")."</th>"
                        . "<th scope='col' id='wplc_status_colum' class='manage-column column-status'  style=\"\"><i class=\"fa fa-cog\"> </i> ".__("Status","wplivechat")."</th>"
                        . "<th scope='col' id='wplc_action_colum' class='manage-column column-action sortable desc'  style=\"\"><i class=\"fa fa-rocket\"> </i> <span>".__("Action","wplivechat")."</span></th>"
                    . "</tr>"
                . "</thead>"
                . "<tbody id=\"the-list\" class='list:wp_list_text_link'>";
    if($results ){
        foreach ($results as $result) {
            unset($trstyle);
            unset($actions);
            $wplc_c++;
            $aid = "";
            if(is_numeric($agent_id)){
                $aid = "&aid=".$agent_id;
            }

            $url = admin_url( 'admin.php?page=wplivechat-menu&action=rc&cid='.$result->id.$aid);
            
            if($result->status == 5 ){
                if(is_numeric($agent_id) or $agent_id === true){
                    $actions = "<a href=\"".$url."\" class=\"wplc_open_chat button\" window-title=\"WP_Live_Chat_".$result->id."\">".__("Initiate Chat","wplivechat")."</a>";
                } else {
                    $actions = "<a  class=\"wplc_open_chat\" window-title=\"WP_Live_Chat_".$result->id."\">".__("You must be a chat agent to initiate chats","wplivechat")."</a>";
                }
            } else {
                $actions = "";
            }
            $trstyle = "style='background-color:#FFFBE4; height:30px;'";
            $user_data = maybe_unserialize($result->ip);
            $user_ip = $user_data['ip'];
            if (function_exists("wplc_return_browser_string")) { $browser = wplc_return_browser_string($user_data['user_agent']); } else { $browser = ""; $user_ip = "<em>Please <a href='./update-core.php'>udpate your pro version</a></em>"; }
            if (function_exists("wplc_return_browser_image")) { $browser_image = wplc_return_browser_image($browser,"16"); } else { $browser_image = ""; }
            global $wplc_basic_plugin_url;
            $table.= "<tr id=\"record_".$result->id."\" $trstyle>"
                        . "<td class='chat_id column-chat_d'><img src='".$wplc_basic_plugin_url."/images/$browser_image' alt='$browser' title='$browser' /> ".$user_ip."</td>"
                        . "<td class='chat_name column_chat_name' id='chat_name_".$result->id."'>".$result->name."</td>"
                        . "<td class='chat_email column_chat_email' id='chat_email_".$result->id."'>".$result->email."</td>"
                        . "<td class='chat_name column_chat_url' id='chat_url_".$result->id."'>".$result->url."</td>"
                        . "<td class='chat_status column_chat_status' id='chat_status_".$result->id."'><strong>".wplc_return_status($result->status)."</strong></td>"
                        . "<td class='chat_action column-chat_action' id='chat_action_".$result->id."'>$actions</td>"
                    . "</tr>";

        }
    } else {
        $table.= "<tr><td></td><td>".__("No visitors on-line at the moment","wplivechat")."</td></tr>";
        
    }
    $table.= "</tbody></table><br /><br />";
    
    return $table;

}




// pro

function wplc_list_chats_pro($agent_id) {

    global $wpdb;
    global $wplc_tblname_chats;
    $wplc_c = 0;
    $results = $wpdb->get_results(
        "
	SELECT *
	FROM $wplc_tblname_chats
        WHERE `status` = 3 OR `status` = 2
        ORDER BY `timestamp` ASC

	"
    );
    $table = "<table class=\"wp-list-table widefat fixed \" cellspacing=\"0\">"
                . "<thead>"
                    . "<tr>"
                        . "<th scope='col' id='wplc_id_colum' class='manage-column column-id sortable desc'  style=''><i class=\"fa fa-globe\"> </i> <span>".__("User Data","wplivechat")."</span></th>"
                        . "<th scope='col' id='wplc_name_colum' class='manage-column column-name_title sortable desc'  style=''><i class=\"fa fa-user\"> </i> <span>".__("Name","wplivechat")."</span></th>"
                        . "<th scope='col' id='wplc_email_colum' class='manage-column column-email' style=\"\"><i class=\"fa fa-envelope\"> </i> ".__("Email","wplivechat")."</th>"
                        . "<th scope='col' id='wplc_url_colum' class='manage-column column-url' style=\"\"><i class=\"fa fa-link\"> </i> ".__("URL","wplivechat")."</th>"
                        . "<th scope='col' id='wplc_status_colum' class='manage-column column-status'  style=\"\"><i class=\"fa fa-cog\"> </i> ".__("Status","wplivechat")."</th>"
                        . "<th scope='col' id='wplc_action_colum' class='manage-column column-action sortable desc'  style=\"\"><i class=\"fa fa-rocket\"> </i> <span>".__("Action","wplivechat")."</span></th>"
                    . "</tr>"
                . "</thead>"
                . "<tbody id=\"the-list\" class='list:wp_list_text_link'>";

    if (!$results) {
        $table.= "<tr><td></td><td>".__("No chat sessions available at the moment","wplivechat")."</td></tr>";
    }
    else {
        foreach ($results as $result) {
            unset($trstyle);
            unset($actions);
            global $wplc_basic_plugin_url;
            $user_data = maybe_unserialize($result->ip);
            $user_ip = $user_data['ip'];
            if (function_exists("wplc_return_browser_string")) { $browser = wplc_return_browser_string($user_data['user_agent']); } else { $browser = ""; $user_ip = "<em>Please <a href='./update-core.php'>udpate your pro version</a></em>"; }
            if (function_exists("wplc_return_browser_image")) { $browser_image = wplc_return_browser_image($browser,"16"); } else { $browser_image = ""; }
            
            $wplc_c++;
            $aid = "";
            if(is_numeric($agent_id)){
                $aid = "&aid=".$agent_id;
            }
            if ($result->status == 2) {
                if(is_numeric($agent_id) or $agent_id === true){
                    $url = admin_url( 'admin.php?page=wplivechat-menu&action=ac&cid='.$result->id.$aid);
                    $actions = "<a href=\"".$url."\" class=\"wplc_open_chat button button-primary\" window-title=\"WP_Live_Chat_".$result->id."\">".__("Accept Chat", "wplivechat")."</a>";
                    $trstyle = "style='background-color:#FFFBE4; height:30px;'";
                } else {
                    $actions = "<a class=\"wplc_open_chat\" window-title=\"WP_Live_Chat_".$result->id."\">".__("You must be a chat agent to answer chats", "wplivechat")."</a>";
                    $trstyle = "style='background-color:#FFFBE4; height:30px;'";
                }
            }
            if ($result->status == 3) {
                if(is_numeric($agent_id) or $agent_id === true){
                    $url = admin_url( 'admin.php?page=wplivechat-menu&action=ac&cid='.$result->id.$aid);
                    $actions = "<a href=\"".$url."\" class=\"wplc_open_chat button button-primary\" window-title=\"WP_Live_Chat_".$result->id."\">".__("Open Chat Window", "wplivechat")."</a>";
                    $trstyle = "style='background-color:#F7FCFE; height:30px;'";
                    if(isset($result->agent_id) && is_numeric($agent_id) && $result->agent_id != $agent_id && $result->agent_id != 0){
                        $actions = "<a class=\"wplc_open_chat\" window-title=\"WP_Live_Chat_".$result->id."\">".__("Chat has been answered by another agent", "wplivechat")."</a>";
                    }
                } else {
                    $actions = "<a class=\"wplc_open_chat\" window-title=\"WP_Live_Chat_".$result->id."\">".__("Chat has been Accepted By Chat Agent ", "wplivechat")."</a>";
                    $trstyle = "style='background-color:#F7FCFE; height:30px;'";
                }
            }
            $table.= "<tr id=\"record_".$result->id."\" $trstyle>"
                        . "<td class='chat_id column-chat_d'><img src='".$wplc_basic_plugin_url."/images/$browser_image' alt='$browser' title='$browser' /> ".$user_ip."</td>"
                        . "<td class='chat_name column_chat_name' id='chat_name_".$result->id."'><img src=\"http://www.gravatar.com/avatar/".md5($result->email)."?s=40\" /> ".$result->name."</td>"
                        . "<td class='chat_email column_chat_email' id='chat_email_".$result->id."'>".$result->email."</td>"
                        . "<td class='chat_name column_chat_url' id='chat_url_".$result->id."'>".$result->url."</td>"
                        . "<td class='chat_status column_chat_status' id='chat_status_".$result->id."'><strong>".wplc_return_status($result->status)."</strong></td>"
                        . "<td class='chat_action column-chat_action' id='chat_action_".$result->id."'>$actions</td>"
                    . "</tr>";

        }
    }
    $table.= "</table><br /><br />";
    return $table;


}




function wplc_send_offline_message($name,$email,$msg,$cid) {
    $wplc_pro_settings = get_option("WPLC_PRO_SETTINGS");
    $email_address = $wplc_pro_settings['wplc_pro_chat_email_address'];
    if (!$email_address || $email_address == "") { $email_address = get_option('admin_email'); }

    $subject = __("WP Live Chat Support - Offline Message from", "wplivechat")."$name";
    $msg = __("Name", "wplivechat").": $name \n".__("Email", "wplivechat").": $email\n".__("Message", "wplivechat").": $msg\n\n".__("Via WP Live Chat Support", "wplivechat");

    
    wplc_mail($email,$name, $subject, $msg);
    //mail($email_address, $subject, $msg);

}

function wplc_record_chat_msg_pro($from,$cid,$msg) {
    global $wpdb;
    global $wplc_tblname_msgs;

    if ($from == "1") {
        $fromname = wplc_return_chat_name($cid);
        $orig = '2';
    }
    else {
        $fromname = $_POST['admin_name'];
        $orig = '1';
    }

    $ins_array = array(
        'chat_sess_id' => $cid,
        'timestamp' => date("Y-m-d H:i:s"),
        'from' => $fromname,
        'msg' => $msg,
        'status' => 0,
        'originates' => $orig
    );
    $rows_affected = $wpdb->insert( $wplc_tblname_msgs, $ins_array );

    wplc_update_active_timestamp($cid);
    wplc_change_chat_status($cid,3);
    return true;
}


function wplc_return_from_name($user_id) {
        $user = get_user_by('id', $user_id);
        return $user->display_name;
}


function wplc_pro_notify_via_email() {
    $wplc_pro_settings = get_option("WPLC_PRO_SETTINGS");
    if (isset($wplc_pro_settings['wplc_pro_chat_email_address'])) { $email_address = $wplc_pro_settings['wplc_pro_chat_email_address']; } else { $email_address = ""; }
    if (!$email_address || $email_address == "") { $email_address = get_option('admin_email'); }
    $chat_noti = $wplc_pro_settings['wplc_pro_chat_notification'];
    if ($chat_noti == "yes") {
        $subject = __("Alert: Someone wants to chat with you on ", "wplivechat").get_option('blogname')."";
        $msg = __("Someone wants to chat with you on your website", "wplivechat")." ".get_option('blogname').") \n\n".__("Log in", "wplivechat").": ".get_option('home')."/wp-login.php";
        //$headers = 'From: '.$email_address.' <'.$email_address.'>';
        //mail($email_address, $subject, $msg);
        wplc_mail($email_address,"WP Live Chat Support", $subject, $msg);
    }
    return true;
}
function wplc_mail_body($msg){
    $body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
    $body .= '<html xmlns="http://www.w3.org/1999/xhtml">';
    $body .= '<head>';
    $body .= '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">';
    $body .= '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
    $body .= '</head>';
    $body .= '<body>';
    $body .= '<p>';
    $body .= $msg;
    $body .= '</p>';
    $body .= '</body>';
    $body .= '</html>';
    return $body;
}
function wplc_mail($reply_to,$reply_to_name,$subject,$msg) {
    if(get_option("wplc_mail_type") == "wp_mail"){
        
        $wplc_pro_settings = get_option("WPLC_PRO_SETTINGS");
        $headers[] = 'Content-type: text/html';
        $headers[] = 'Reply-To: '.$reply_to_name.'<'.$reply_to.'>';
        $to = $wplc_pro_settings['wplc_pro_chat_email_address'];
        if (!wp_mail($to, $subject, $msg, $headers )) {
            $handle = fopen("wp_livechat_error_log.txt", 'a');
            $error = date("Y-m-d H:i:s")." WP-Mail Failed to send \n";
            @fwrite($handle, $error); 
        }
        return;
    } else {
    
        require 'phpmailer/PHPMailerAutoload.php';
        $wplc_pro_settings = get_option("WPLC_PRO_SETTINGS");
        $host = get_option('wplc_mail_host');
        $port = get_option('wplc_mail_port');
        $username = get_option("wplc_mail_username");
        $password = get_option("wplc_mail_password");
        if($host && $port && $username && $password){
            //Create a new PHPMailer instance
            $mail = new PHPMailer();
            //Tell PHPMailer to use SMTP
            $mail->isSMTP();
            //Enable SMTP debugging
            // 0 = off (for production use)
            // 1 = client messages
            // 2 = client and server messages
            $mail->SMTPDebug = 0;
            //Ask for HTML-friendly debug output
            $mail->Debugoutput = 'html';
            //Set the hostname of the mail server
            $mail->Host = $host;
            //Set the SMTP port number - likely to be 25, 26, 465 or 587
            $mail->Port = $port;
            //Set the encryption system to use - ssl (deprecated) or tls
            if($port == "587"){
                $mail->SMTPSecure = 'tls';
            } else if($port == "465"){
                $mail->SMTPSecure = 'ssl';
            }
            //Whether to use SMTP authentication
            $mail->SMTPAuth = true;
            //Username to use for SMTP authentication
            $mail->Username = $username;
            //Password to use for SMTP authentication
            $mail->Password = $password;
            //Set who the message is to be sent from
            $mail->setFrom($reply_to, $reply_to_name);
            //Set who the message is to be sent to
            $mail->addAddress($wplc_pro_settings['wplc_pro_chat_email_address']);
            //Set the subject line
            $mail->Subject = $subject;
            //Read an HTML message body from an external file, convert referenced images to embedded,
            //convert HTML into a basic plain-text alternative body
            $body = wplc_mail_body($msg);
            $mail->msgHTML($body);
            //Replace the plain text body with one created manually
            $mail->AltBody = $msg;


            //send the message, check for errors
            if (!$mail->send()) {
                $handle = fopen("wp_livechat_error_log.txt", 'a');
                $error = date("Y-m-d H:i:s")." ".$mail->ErrorInfo." \n";
                @fwrite($handle, $error); 
            }
            return;
        }
    }
}
function wplc_delete_history(){
    global $wpdb;
    global $wplc_tblname_chats;
    $wpdb->query("TRUNCATE TABLE $wplc_tblname_chats");
}
function wplc_pro_get_admin_picture(){
    $pro_settings = get_option("WPLC_PRO_SETTINGS");
    if($pro_settings['wplc_chat_pic']){
        return urldecode($pro_settings['wplc_chat_pic']);
    }
}
function wplc_get_visitors_ids(){
    global $wpdb;
    global $wplc_tblname_chats;
    $sql = "SELECT `id` FROM `$wplc_tblname_chats` WHERE `status` = 5 ORDER BY `timestamp` DESC";
    $results = $wpdb->get_results($sql);
    if($results){
        return $results;
    } else {
        return false;
    }
}


///// Multi Agents functions

function wplc_ma_action_callback(){
    //var_dump($_POST);
    $check = check_ajax_referer( 'wplc', 'security' );
    
    if($check == 1){
        
    }
    die();
}

function wplc_ma_set_user_as_agent( $user_id ) {
    
    if ( !current_user_can( 'edit_user', $user_id ) ) { return false; }
    update_user_meta( $user_id, 'wplc_ma_agent', $_POST['wplc_ma_agent'] );
    
    if ($_POST['wplc_ma_agent'] == '1') {
        $wplc_ma_user = new WP_User( $user_id );
        $wplc_ma_user->add_cap( 'wplc_ma_agent' );
        update_user_meta($user_id, "wplc_chat_agent_online", time());
    } else {
        $wplc_ma_user = new WP_User( $user_id );
        $wplc_ma_user->remove_cap( 'wplc_ma_agent' );
        delete_user_meta($user_id, "wplc_ma_agent");
        delete_user_meta($user_id, "wplc_chat_agent_online");
    }
}


function wplc_ma_custom_user_profile_fields($user) {
    ?>
    <table class="form-table">
        <tr>
            <th>
                <label for="wplc_ma_agent"><?php _e('Chat Agent'); ?></label>
            </th>
            <td>
                <label for="wplc_ma_agent">
                <input name="wplc_ma_agent" type="checkbox" id="wplc_ma_agent" value="1" <?php if (esc_attr( get_the_author_meta( 'wplc_ma_agent', $user->ID ) ) == "1") { echo "checked=\"checked\""; } ?>>
                <?php _e("Make this user a chat agent","wplivechat"); ?></label>
            </td>
        </tr>
    </table>
    <?php
}


function wplc_set_admin_to_access_chat() {

    
    $admins = get_role( 'administrator' );
    //$admins->add_cap( 'wplc_chat_agent' ); 

}
function wplc_ma_set_agents_online($user_id){
    
    if (esc_attr( get_the_author_meta( 'wplc_ma_agent', $user_id ) ) == "1"){
        
        update_user_meta($user_id, "wplc_chat_agent_online", time());
    }
    $users = get_users(array(
        'meta_key'=> 'wplc_chat_agent_online',
    ));
    foreach($users as $user){
        $time = get_user_meta($user->ID, "wplc_chat_agent_online", true);
        $diff = time() - $time;
        if($diff > 65){
            delete_user_meta($user->ID, "wplc_chat_agent_online");
        }
    }
}
function wplc_ma_agent_logout(){
    $user_id = get_current_user_id();
//    $user_array = unserialize(get_transient('wplc_online_agents'));
//    $key = array_search($user_id, $user_array);
//    unset($user_array[$key]);
//    set_transient('wplc_online_agents', serialize($user_array), 20);
    delete_user_meta($user_id, "wplc_chat_agent_online");
}
function wplc_ma_is_agent_online(){
    $check = get_users(array(
        'meta_key'=> 'wplc_chat_agent_online',
    ));
    if($check){
        return true;
    } else {
        return false;
    }
}
function wplc_ma_total_agents_online(){
    $users = get_users(array(
        'meta_key'=> 'wplc_chat_agent_online',
    ));
    return count($users);
}
//echo wplc_ma_total_agents_online();
function wplc_ma_online_agents(){ ?>
    <style >
        .wplc_circle{
            width: 10px !important;
            height: 10px !important;
            display: inline-block !important;
            border-radius: 100% !important;
            margin-right: 5px !important;
        }
        .wplc_red_circle{
            background: red;
        }
        .wplc_green_circle{
            background:rgb(103, 213, 82);
        }
    </style>
    <?php 
    if(wplc_ma_is_agent_online()){
        $online_now = wplc_ma_total_agents_online();
        $circle_class = "wplc_green_circle";
        if($online_now == 1){
            $chat_agents = __('Chat Agent Online', 'wplivechat');
        } else {
            $chat_agents = __('Chat Agents Online', 'wplivechat');
        }
    } else {
        $online_now = 0;
        $circle_class = "wplc_red_circle";
        $chat_agents = __('Chat Agents Online', 'wplivechat');
    }

    global $wp_admin_bar;
    $wp_admin_bar->add_menu( array(
        'id' => 'wplc_ma_online_agents',
        'title' => '<span class="wplc_circle '.$circle_class.'"></span>'.$online_now.' '.$chat_agents,
        'href' => false
    ) );
    if($online_now > 0){
        $user_array =  get_users(array(
            'meta_key'=> 'wplc_chat_agent_online',
        ));
        foreach($user_array as $user){
            
            $wp_admin_bar->add_menu( array(
                'id' => 'wplc_user_online_'.$user->ID,
                'parent' => 'wplc_ma_online_agents',
                'title' => $user->display_name,
                'href' => false,
            ) );
        }
    }
}
function wplc_ma_head(){
    
   
    
    ?>
    <script>
        
            
            
        jQuery(document).ready(function() {
            var wplc_ma_set_transient = null;
            
            wplc_ma_set_transient = setInterval(function (){wplc_ma_update_agent_transient();}, 60000);
            wplc_ma_update_agent_transient();
            function wplc_ma_update_agent_transient() {
                var data = {
                    action: 'wplc_ma_set_transient',
                    security: '<?php echo wp_create_nonce("wplc"); ?>',
                    user_id:  '<?php echo get_current_user_id(); ?>'
                };
                jQuery.post(ajaxurl, data, function(response) {
                    
                });
            }
        });
    </script>
    <?php
}
function wplc_ma_update_agent_id($cid, $aid){
    global $wpdb;
    global $wplc_tblname_chats;
    $sql = "SELECT * FROM `$wplc_tblname_chats` WHERE `id` = '$cid'";
    $result = $wpdb->get_row($sql); 
    if($result->status != 3){
        $update = "UPDATE `$wplc_tblname_chats` SET `agent_id` = '$aid' WHERE `id` = '$cid'";
        $wpdb->query($update);
    }
}

function wplc_ma_check_if_user_is_agent(){
    $user_id = get_current_user_id();
    if (esc_attr(get_the_author_meta('wplc_ma_agent', $user_id ) ) == "1"){
        return $user_id;
    } else {
        return "not_user_agent";
    }
}
function wplc_ma_check_if_chat_answered_by_other_agent($cid, $aid){
    global $wpdb;
    global $wplc_tblname_chats;
    $sql = "SELECT * FROM `$wplc_tblname_chats` WHERE `id` = '$cid'";
    $result = $wpdb->get_row($sql); 
    if(intval($result->agent_id) == intval($aid)){
        return false;
    } else {
        return true;
    }
}
