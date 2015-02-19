<style>
    input[type=button]{
        cursor: pointer;
    }
</style>
<?php

wplc_pro_version_check();
$wplc_pro_settings = get_option("WPLC_PRO_SETTINGS");
if (isset($wplc_pro_settings['wplc_pro_chat_notification']) && $wplc_pro_settings['wplc_pro_chat_notification'] == "yes") { $wplc_pro_chat_notification = "CHECKED"; } else { };

if(get_option("WPLC_HIDE_CHAT") == true) { $wplc_hide_chat = "checked"; } else { $wplc_hide_chat = ""; };
$wplc_mail_type = get_option("wplc_mail_type");
?>
<div class="wrap">
    <div id="icon-edit" class="icon32 icon32-posts-post">
        <br>
    </div>
    <h2><?php _e("WP Live Chat Support Settings","wplivechat")?></h2>
    <?php
        $wplc_settings = get_option("WPLC_SETTINGS");
        if ($wplc_settings["wplc_settings_align"]) { $wplc_settings_align[intval($wplc_settings["wplc_settings_align"])] = "SELECTED"; }
        if ($wplc_settings["wplc_settings_enabled"]) { $wplc_settings_enabled[intval($wplc_settings["wplc_settings_enabled"])] = "SELECTED"; }
        if ($wplc_settings["wplc_settings_fill"]) { $wplc_settings_fill = $wplc_settings["wplc_settings_fill"]; } else { $wplc_settings_fill = "ed832f"; }
        if ($wplc_settings["wplc_settings_font"]) { $wplc_settings_font = $wplc_settings["wplc_settings_font"]; } else { $wplc_settings_font = "FFFFFF"; }
    ?>
    <form action='admin.php?page=wplivechat-menu-settings' name='wplc_settings' method='POST' id='wplc_settings'>
    
    <div id="wplc_tabs">
      <ul>
          <li><a href="#tabs-1"><?php _e("General Settings","wplivechat")?></a></li>
          <li><a href="#tabs-2"><?php _e("Chat Box","wplivechat")?></a></li>
          <li><a href="#tabs-3"><?php _e("Offline Messages","wplivechat")?></a></li>
          <li><a href="#tabs-4"><?php _e("Styling","wplivechat")?></a></li>
          <li><a href="#tabs-5"><?php _e("Chat Agents","wplivechat") ?></a></li>
      </ul>
      <div id="tabs-1">
          <h3><?php _e("Main Settings",'wplivechat')?></h3>
          <table class='form-table' width='700'>
              <tr>
                  <td width='200' valign='top'><?php _e("Chat enabled","wplivechat")?>:</td>
                  <td>
                      <select id='wplc_settings_enabled' name='wplc_settings_enabled'>
                          <option value="1" <?php if (isset($wplc_settings_enabled[1])) { echo $wplc_settings_enabled[1]; } ?>><?php _e("Yes","wplivechat")?></option>
                          <option value="2" <?php if (isset($wplc_settings_enabled[2])) { echo $wplc_settings_enabled[2]; } ?>><?php _e("No","wplivechat")?></option>
                      </select>
                  </td>
              </tr>
              <tr>
                  <td width='200' valign='top'>
                      <?php _e("Hide Chat","wplivechat")?>:
                      <p class="description"><?php _e("Hides chat for 24hrs when user clicks X" ,"wplivechat") ?> </p>
                  </td>
                  <td valign='top'>
                      <input type="checkbox" name="wplc_hide_chat" value="true" <?php echo $wplc_hide_chat ?>/>
                  </td>
              </tr>
          </table>

      </div>
      <div id="tabs-2">
          <h3><?php _e("Chat Window Settings",'wplivechat')?></h3>
          <table class='form-table' width='700'>
              <tr>
                  <td width='200' valign='top'><?php _e("Chat box alignment","wplivechat")?>:</td>
                  <td>
                      <select id='wplc_settings_align' name='wplc_settings_align'>
                          <option value="1" <?php if (isset($wplc_settings_align[1])) { echo $wplc_settings_align[1]; } ?>><?php _e("Bottom left","wplivechat")?></option>
                          <option value="2" <?php if (isset($wplc_settings_align[2])) { echo $wplc_settings_align[2]; } ?>><?php _e("Bottom right","wplivechat")?></option>
                          <option value="3" <?php if (isset($wplc_settings_align[3])) { echo $wplc_settings_align[3]; } ?>><?php _e("Left","wplivechat")?></option>
                          <option value="4" <?php if (isset($wplc_settings_align[4])) { echo $wplc_settings_align[4]; } ?>><?php _e("Right","wplivechat")?></option>
                      </select>
                  </td>
              </tr>
              <tr>
                  <td>
                      <?php _e("Auto Pop-up","wplivechat") ?>
                  </td>
                  <td>
                      <input type="checkbox" name="wplc_auto_pop_up" value="1" <?php if(isset($wplc_settings['wplc_auto_pop_up']) && $wplc_settings['wplc_auto_pop_up'] == 1 ){ echo "checked";} ?>/>
                      <p class="description"><small><?php _e("Expand the chat box automatically (prompts the user to enter their name and email address).","wplivechat") ?></small></p>
                  </td>
              </tr>
              <!-- Chat Name-->
              <tr>
                <td width='200' valign='top'>
                    <?php _e("Name ","wplivechat") ?>:
                </td>
                <td>
                    <input id='wplc_pro_name' name='wplc_pro_name' type='text' size='50' maxlength='50' class='regular-text' value='<?php echo stripslashes($wplc_pro_settings['wplc_chat_name']) ?>' />
                </td>
            </tr>
            <!-- Chat Pic-->
            <?php   $wplc_current_user = wp_get_current_user();
                    $wplc_current_picture = urldecode($wplc_pro_settings['wplc_chat_pic']);
                    $wplc_current_logo = urldecode($wplc_pro_settings['wplc_chat_logo']);
                    
            ?>
            <tr>
                <td width='200' valign='top'>
                    <?php _e("Picture","wplivechat")?>:
                </td>
                <td>
                    <span id="wplc_pic_area">
                        <img src="<?php echo $wplc_current_picture ?>" width="100px"/>
                    </span>
                    <input id="wplc_upload_pic" name="wplc_upload_pic" type="hidden" size="35" class="regular-text" maxlength="700" value="<?php echo base64_encode($wplc_current_picture) ?>"/> 
                    <br/>
                    <input id="wplc_btn_upload_pic" name="wplc_btn_upload_pic" type="button" value="<?php _e("Upload Image","wplivechat") ?>" />
                    <br/>
                    <input id="wplc_btn_remove_pic" name="wplc_btn_remove_pic" type="button" value="<?php _e("Remove Image","wplivechat") ?>" />
                    <?php _e("Recomended Size 40px x 40px","wplivechat")?>
                </td>
            </tr>
            <!-- Chat Logo-->
             <tr>
                <td width='200' valign='top'>
                    <?php _e("Logo","wplivechat")?>:
                </td>
                <td>
                    <span id="wplc_logo_area">
                        <img src="<?php echo $wplc_current_logo ?>" width="100px"/>
                    </span> 
                    <input id="wplc_upload_logo" name="wplc_upload_logo" type="hidden" size="35" class="regular-text" maxlength="700" value=" <?php echo base64_encode($wplc_current_logo) ?>"/> 
                    <br/>
                    <input id="wplc_btn_upload_logo" name="wplc_btn_upload_logo" type="button" value="<?php _e("Upload Logo","wplivechat") ?>" />
                    <br/>
                    <input id="wplc_btn_remove_logo" name="wplc_btn_remove_logo" type="button" value="<?php _e("Remove Logo","wplivechat") ?>" />
                    <?php _e("Recomended Size 250px x 40px","wplivechat")?>
                </td>
            </tr>
            <!-- Chat Delay-->
              <tr>
                <td width='200' valign='top'>
                    <?php _e("Chat delay (seconds)","wplivechat")?>:
                </td>
                <td>
                    <input id="wplc_pro_delay" name="wplc_pro_delay" type="text" size="6" maxlength="4" value="<?php echo stripslashes($wplc_pro_settings['wplc_chat_delay']) ?>" /> (<?php _e("how long it takes for your chat window to pop up", "wplivechat") ?>
                </td>
            </tr>
            <!-- Chat Notification if want to chat -->
              <tr>
                <td width='200' valign='top'>
                    <?php _e("Chat notifications","wplivechat")?>:
                </td>
                <td>
                    <input id="wplc_pro_chat_notification" name="wplc_pro_chat_notification" type="checkbox" value="yes" <?php if (isset($wplc_pro_chat_notification)) { echo $wplc_pro_chat_notification; } ?>/>
                    <?php _e("Alert me via email as soon as someone wants to chat","wplivechat");
                    _e("(while online only)","wplivechat"); ?>
                </td>
            </tr>
          </table>

      </div>
      <div id="tabs-3">
          <h3><?php _e("Offline Messages",'wplivechat')?></h3>
          <table class='form-table' width='700'>
              <tr>
                <td width='200' valign='top'>
                    <?php _e("Email Address","wplivechat")?>:
                </td>
                <td>
                    <input id="wplc_pro_chat_email_address" name="wplc_pro_chat_email_address" class="regular-text" type="text" value="<?php if (isset($wplc_pro_settings['wplc_pro_chat_email_address'])) { echo $wplc_pro_settings['wplc_pro_chat_email_address']; } ?>" />
                    <?php _e("Email address where offline messages are delivered to","wplivechat") ?>
                </td>
            </tr>
            
          </table>
          <hr/>
          <table >
              <tr>
                  <td width="200px"><?php _e("Sending Method", "wplivechat") ?></td>
                  <td width="200px" style="text-align: center;"><?php _e("WP Mail", "wplivechat") ?></td>
                  <td width="200px" style="text-align: center;"><?php _e("PHP Mailer", "wplivechat") ?></td>
              </tr>
              <tr>
                  <td></td>
                  <td style="text-align: center;"><input class="wplc_mail_type_radio" type="radio" value="wp_mail" name="wplc_mail_type" <?php if($wplc_mail_type == "wp_mail"){ echo "checked";} ?>></td>
                  <td style="text-align: center;"><input id="wpcl_mail_type_php" class="wplc_mail_type_radio" type="radio" value="php_mailer" name="wplc_mail_type" <?php if($wplc_mail_type == "php_mailer"){ echo "checked";} ?>></td>
              </tr>
          </table>
          <hr/>
          <table id="wplc_smtp_details" class='form-table' width='700'>
            <tr>
                <td width="200" valign="top">
                   <?php _e("Host","wplivechat")?>: 
                </td>
                <td>
                    <input id="wplc_mail_host" name="wplc_mail_host" type="text" class="regular-text" value="<?php echo get_option("wplc_mail_host") ?>" placeholder="smtp.example.com" />
                </td>
            </tr>
            <tr>
                <td>
                   <?php _e("Port","wplivechat")?>: 
                </td>
                <td>
                    <input id="wplc_mail_port" name="wplc_mail_port" type="text" class="regular-text" value="<?php echo get_option("wplc_mail_port") ?>" placeholder="25" />
                </td>
            </tr>
            <tr>
                <td>
                   <?php _e("Username","wplivechat")?>: 
                </td>
                <td>
                    <input id="wplc_mail_username" name="wplc_mail_username" type="text" class="regular-text" value="<?php echo get_option("wplc_mail_username") ?>" placeholder="me@example.com" />
                </td>
            </tr>
            <tr>
                <td>
                   <?php _e("Password","wplivechat")?>: 
                </td>
                <td>
                    <input id="wplc_mail_password" name="wplc_mail_password" type="password" class="regular-text" value="<?php echo get_option("wplc_mail_password") ?>" placeholder="Password" />
                </td>
            </tr>
        </table>
        <table class='form-table' width='700'>
             <tr>
                    <td width="200" valign="top"><?php _e("Offline Chat Box Title","wplivechat")?>:</td>
                    <td>
                        <input id="wplc_pro_na" name="wplc_pro_na" type="text" size="50" maxlength="50" class="regular-text" value="<?php echo stripslashes($wplc_pro_settings['wplc_pro_na'])?>" /> <br />
                            
                        
                    </td>
                </tr>
                <tr>
                    <td width="200" valign="top"><?php _e("Offline Text Fields","wplivechat")?>:</td>
                    <td>
                        <input id="wplc_pro_offline1" name="wplc_pro_offline1" type="text" size="50" maxlength="150" class="regular-text" value="<?php echo stripslashes($wplc_pro_settings['wplc_pro_offline1'])?>" /> <br />
                        <input id="wplc_pro_offline2" name="wplc_pro_offline2" type="text" size="50" maxlength="50" class="regular-text" value="<?php echo stripslashes($wplc_pro_settings['wplc_pro_offline2'])?>" /> <br />
                        <input id="wplc_pro_offline3" name="wplc_pro_offline3" type="text" size="50" maxlength="150" class="regular-text" value="<?php echo stripslashes($wplc_pro_settings['wplc_pro_offline3'])?>" /> <br />
                            
                        
                    </td>
                </tr>
          </table>
          
      </div>

      <div id="tabs-4">
          <h3><?php _e("Styling",'wplivechat')?></h3>
          <table class='form-table' width='700'>
              <tr>
                  <td width='200' valign='top'><?php _e("Chat box fill color","wplivechat")?>:</td>
                  <td>
                      <input id="wplc_settings_fill" name="wplc_settings_fill" type="text" class="color" value="<?php echo $wplc_settings_fill?>" />
                  </td>
              </tr>
              <tr>
                  <td width='200' valign='top'><?php _e("Chat box font color","wplivechat")?>:</td>
                  <td>
                      <input id="wplc_settings_font" name="wplc_settings_font" type="text" class="color" value="<?php echo $wplc_settings_font?>" />
                  </td>
              </tr>
              <tr>
                    <td width="200" valign="top"><?php _e("First Section Text","wplivechat")?>:</td>
                    <td>
                        <input id="wplc_pro_fst1" name="wplc_pro_fst1" type="text" size="50" maxlength="50" class="regular-text" value="<?php echo stripslashes($wplc_pro_settings['wplc_pro_fst1'])?>" /> <br />
                        <input id="wplc_pro_fst2" name="wplc_pro_fst2" type="text" size="50" maxlength="50" class="regular-text" value="<?php echo stripslashes($wplc_pro_settings['wplc_pro_fst2'])?>" /> <br />
                            
                        
                    </td>
                </tr>
                <tr>
                    <td width="200" valign="top"><?php _e("Intro Text","wplivechat")?>:</td>
                    <td>
                        <input id="wplc_pro_intro" name="wplc_pro_intro" type="text" size="50" maxlength="150" class="regular-text" value="<?php echo stripslashes($wplc_pro_settings['wplc_pro_intro'])?>" /> <br />
                    </td>
                </tr>
                <tr>
                    <td width="200" valign="top"><?php _e("Second Section Text","wplivechat")?>:</td>
                    <td>
                        <input id="wplc_pro_sst1" name="wplc_pro_sst1" type="text" size="50" maxlength="30" class="regular-text" value="<?php echo stripslashes($wplc_pro_settings['wplc_pro_sst1'])?>" /> <br />
                        <input id="wplc_pro_sst2" name="wplc_pro_sst2" type="text" size="50" maxlength="70" class="regular-text" value="<?php echo stripslashes($wplc_pro_settings['wplc_pro_sst2'])?>" /> <br />
                    </td>
                </tr>
                <tr>
                    <td width="200" valign="top"><?php _e("Reactivate Chat Section Text","wplivechat")?>:</td>
                    <td>
                        <input id="wplc_pro_tst1" name="wplc_pro_tst1" type="text" size="50" maxlength="50" class="regular-text" value="<?php echo stripslashes($wplc_pro_settings['wplc_pro_tst1'])?>" /> <br />
                            
                        
                    </td>
                </tr>
                <tr>
                    <td width="200" valign="top"><?php _e("User chat welcome","wplivechat")?>:</td>
                    <td>
                        <input id="wplc_user_welcome_chat" name="wplc_user_welcome_chat" type="text" size="50" maxlength="150" class="regular-text" value="<?php echo stripslashes($wplc_pro_settings['wplc_user_welcome_chat'])?>" /> <br />
                            
                        
                    </td>
                </tr>
                
                <tr>
                    <td width="200" valign="top"><?php _e("Other text","wplivechat")?>:</td>
                    <td>
                        <input id="wplc_user_enter" name="wplc_user_enter" type="text" size="50" maxlength="150" class="regular-text" value="<?php echo stripslashes($wplc_pro_settings['wplc_user_enter'])?>" /> This text is shown above the user chat input field<br />
                            
                        
                    </td>
                </tr>
          </table>
      </div>
        <div id="tabs-5">
            <?php
                $user_array =  get_users(array(
                    'meta_key'=> 'wplc_ma_agent',
                ));
                ?>
                <h3>Current Users that are Chat Agents</h3>
                <?php foreach($user_array as $user){
                    echo $user->display_name."<br/>";
                } ?>
                <hr/>
                <p class="description"><?php _e("To add or remove a user as a chat agent, go into the users profile and select the checkbox Chat Agent and click save.","wplivechat"); ?></p>
                <p class="description"><?php _e("If there are no chat agents online, the chat will show as offline","wplivechat"); ?></p>
                
        </div> 
    </div>
    <p class='submit'><input type='submit' name='wplc_save_settings' class='button-primary' value='<?php _e("Save Settings","wplivechat")?>' /></p>
    </form>
    
    </div>
