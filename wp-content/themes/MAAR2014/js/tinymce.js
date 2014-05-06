
(function() {
	tinymce.PluginManager.add('item_button', function( editor, url ) {
		editor.addButton( 'item_button', {
			text: 'Insert Function',
			icon: false,
			type: 'menubutton',
			menu: [
				{
					text: 'Button',
					onclick: function() {
						editor.windowManager.open( {
							title: 'Insert Button',
							body: [
								{
									type: 'textbox',
									name: 'textboxTitle',
									label: 'Button Title',
									value: 'Enter Name'
								},
								{
									type: 'textbox',
									name: 'textboxLink',
									label: 'Button Link',
									value: 'http://www.mplsrealtor.com'
								},
								{
									type: 'listbox',
									name: 'buttonTarget',
									label: 'Link Target',
									'values': [
										{text: 'New Window', value: '_blank'},
										{text: 'Same Window', value: '_self'}
									]
								},
								{
									type: 'listbox',
									name: 'buttonSize',
									label: 'Size',
									'values': [
										{text: 'Medium', value: 'medium'},
										{text: 'Small', value: 'small'},
										{text: 'Large', value: 'large'},
										{text: 'XL', value: 'xlarge'}
									]
								},
								{
									type: 'listbox',
									name: 'buttonColor',
									label: 'Color',
									'values': [
										{text: 'Primary (Blue)', value: 'primary'},
										{text: 'Secondary (Red)', value: 'secondary'},
										{text: 'Info (White)', value: 'info'},
										{text: 'Default (Grey)', value: 'default'}
									]
								}
							],
							onsubmit: function( e ) {
								editor.insertContent( '<div class="btn ' + e.data.buttonSize + ' ' + e.data.buttonColor + '"><a href="' + e.data.textboxLink + '" target="' + e.data.buttonTarget + '">' + e.data.textboxTitle + '</a></div>');
							}
						});
					}
				},
				{
					text: 'Alert',
					onclick: function() {
						editor.windowManager.open( {
							title: 'Create an alert',
							body: [
								{
									type: 'textbox',
									name: 'multilineName',
									label: 'Alert Content',
									value: '',
									multiline: true,
									minWidth: 300,
									minHeight: 300
								},
								{
									type: 'listbox',
									name: 'alertWidth',
									label: 'Width',
									'values': [
										{text: 'Full Width', value: 'twelve columns'},
										{text: '3/4 Width', value: 'eight columns'},
										{text: 'Half Width', value: 'six columns'},
										{text: '1/4 Width', value: 'four columns'},
									]
								},
								{
									type: 'listbox',
									name: 'alertType',
									label: 'Type',
									'values': [
										{text: 'Warning', value: 'warning'},
										{text: 'Danger', value: 'danger'},
										{text: 'Success', value: 'success'},
										{text: 'Default', value: 'default'}
									]
								}
							],
							onsubmit: function( e ) {
								editor.insertContent( '<div class="row"><div class="' + e.data.alertWidth + '"><li class="alert ' + e.data.alertType + '">' + e.data.multilineName + '</li></div></div>');
							}
						});
					}
				},
				{
					text: 'Tabs',
					onclick: function() {
						editor.windowManager.open( {
							title: 'Create Tabs',
							wrapper: true,
							body: [
								{
									type: 'textbox',
									name: 'tab1',
									label: 'Tab 1 Title'
								},
								{
									type: 'textbox',
									name: 'tabContent1',
									label: 'Tab 1 Content',
									multiline: true,
									minWidth: 500,
									minHeight: 100
								},
								{
									type: 'textbox',
									name: 'tab2',
									label: 'Tab 2 Title'
								},
								{
									type: 'textbox',
									name: 'tabContent2',
									label: 'Tab 2 Content',
									multiline: true,
									minWidth: 500,
									minHeight: 100
								},
								{
									type: 'textbox',
									name: 'tab3',
									label: 'Tab 3 Title'
								},
								{
									type: 'textbox',
									name: 'tabContent3',
									label: 'Tab 3 Content',
									multiline: true,
									minWidth: 500,
									minHeight: 100
								},
								{
									type: 'textbox',
									name: 'tab4',
									label: 'Tab 4 Title'
								},
								{
									type: 'textbox',
									name: 'tabContent4',
									label: 'Tab 4 Content',
									multiline: true,
									minWidth: 500,
									minHeight: 100
								}
							],
							onsubmit: function( e ) {
								editor.insertContent( '<section class="tabs pill"><ul class="tab-nav"><li class="active"><a href="#">' + e.data.tab1 + '</a><li><a href="#">' + e.data.tab2 + '</a><li><a href="#">' + e.data.tab3 + '</a><li><a href="#">' + e.data.tab4 + '</a></ul><div class="tab-content active">' + e.data.tabContent1 + '</div><div class="tab-content">' + e.data.tabContent2 + '</div><div class="tab-content">' + e.data.tabContent3 + '</div><div class="tab-content">' + e.data.tabContent4 + '</div></section>');
							}
						});
						// Displays an alert box using the active editors window manager instance
						tinyMCE.activeEditor.windowManager.alert('You can create up to four tabs. If you do not want to use all of them, leave them blank. The first tab is always your active tab.');
					}
				}
			]
		});
	});
})();

