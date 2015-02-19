   

jQuery( document ).ready(function() {
    if(jQuery("input[type=radio][name='wplc_mail_type']:checked").val() === "php_mailer"){
        jQuery("#wplc_smtp_details").show();
    } else {
        jQuery("#wplc_smtp_details").hide();
    }
    
    jQuery('.wplc_mail_type_radio').click(
    function(e){
        if (jQuery(this).is(':checked') && jQuery(this).val() === "php_mailer"){
            jQuery("#wplc_smtp_details").show();
        } else {
            jQuery("#wplc_smtp_details").hide();
        }
    });
    
});