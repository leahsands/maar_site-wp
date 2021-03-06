/* global objectL10n */
jQuery(document).ready(function(){
	var emailempty, passwordempty, email, password, site_url, first_name, password2, urlempty, passwordmatch;
	jQuery('#signin-submit').click(function(){
		emailempty = '{emailempty}'.replace('{emailempty}', objectL10n.emailempty);
		passwordempty = '{passwordempty}'.replace('{passwordempty}', objectL10n.passwordempty);
		email = jQuery('#signin-email').val();
		password = jQuery('#signin-password').val();
		if (!email) {
			window.alert(emailempty);
			return;
		}
		if (!password) {
			window.alert(passwordempty);
			return;
		}
		jQuery.ajax({
			type: 'GET',
			url: 'https://readygraph.com/api/v1/wordpress-login/',
			data: {
				'email' : email,
				'password' : password
			},
			dataType: 'json',
			success: function(response) {
				if (response.success) {
					var pathname = window.location.href;
					window.location = pathname + '&app_id='+response.data.app_id;
				} else {
					jQuery('#error').text(response.error);
					jQuery('#error').show();
				}
			}
		});
	});

	jQuery('#register-app-submit').click(function(){
		email = jQuery('#register-email').val();
		site_url = jQuery('#register-url').val();
		first_name = jQuery('#register-name').val();
		password = jQuery('#register-password').val();
		password2 = jQuery('#register-password1').val();
		urlempty = '{urlempty}'.replace('{urlempty}', objectL10n.urlempty);
		emailempty = '{emailempty}'.replace('{emailempty}', objectL10n.emailempty);
		passwordmatch = '{passwordmatch}'.replace('{passwordmatch}', objectL10n.passwordmatch);
		if (!site_url) {
			window.alert(urlempty);
			return;
		}
		if (!email) {
			window.alert(emailempty);
			return;
		}
		if ( !password || password != password2 ) {
			window.alert(passwordmatch);
			return;
		}

		jQuery.ajax({
			type: 'POST',
			url: 'https://readygraph.com/api/v1/wordpress-signup/',
			data: {
				'email' : email,
				'site_url' : site_url,
				'first_name': first_name,
				'password' : password,
				'password2' : password2,
				'source' : 'subscribe2'
			},
			dataType: 'json',
			success: function(response) {
				if (response.success) {
					var pathname = window.location.href;
					window.location = pathname + '&app_id='+response.data.app_id;
				} else {
					jQuery('#error').text(response.error);
					jQuery('#error').show();
				}
			}
		});
	});
});