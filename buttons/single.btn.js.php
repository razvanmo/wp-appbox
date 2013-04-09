<?php include(dirname(__FILE__).'/functions.js'); ?>

(function() {
	tinymce.create('tinymce.plugins.wpAppbox_StoreButtons', {

		init : function(ed, url){
			ed.addButton('wpAppbox_AppStoreButton', {
			title : '(Mac) App Store Appbox',
				onclick : function() {
					ed.execCommand(
						'mceInsertContent',
						false,
						wpAppbox_appstore_button()
					);
				},
				image: url + "/appstore.btn.png"
			});
			
			ed.addButton('wpAppbox_GooglePlayButton', {
			title : '(Mac) App Store Appbox',
				onclick : function() {
					ed.execCommand(
						'mceInsertContent',
						false,
						wpAppbox_googleplay_button()
					);
				},
				image: url + "/googleplay.btn.png"
			});
			
			ed.addButton('wpAppbox_AndroidPitButton', {
			title : '(Mac) App Store Appbox',
				onclick : function() {
					ed.execCommand(
						'mceInsertContent',
						false,
						wpAppbox_androidpit_button()
					);
				},
				image: url + "/androidpit.btn.png"
			});
		
			ed.addButton('wpAppbox_WindowsPhoneStoreButton', {
			title : 'Windows Phone Store Appbox',
				onclick : function() {
					ed.execCommand(
						'mceInsertContent',
						false,
						wpAppbox_windowsphonestore_button()
					);
				},
				image: url + "/windowsphonestore.btn.png"
			});
		
		
			ed.addButton('wpAppbox_FirefoxMarketplaceButton', {
			title : 'Firefox Marketplace Appbox',
				onclick : function() {
					ed.execCommand(
						'mceInsertContent',
						false,
						wpAppbox_firefoxmarketplace_button()
					);
				},
				image: url + "/firefoxmarketplace.btn.png"
			});
		
		
			ed.addButton('wpAppbox_ChromeWebStoreButton', {
			title : 'Chrome Web Store Appbox',
				onclick : function() {
					ed.execCommand(
						'mceInsertContent',
						false,
						wpAppbox_chromewebstore_button()
					);
				},
				image: url + "/chromewebstore.btn.png"
			});
		
			ed.addButton('wpAppbox_WindowsStoreButton', {
			title : 'Windows Store Appbox',
				onclick : function() {
					ed.execCommand(
						'mceInsertContent',
						false,
						wpAppbox_windowsstore_button()
					);
				},
				image: url + "/windowsstore.btn.png"
			});
		
		
			ed.addButton('wpAppbox_FirefoxAddonButton', {
			title : 'Firefox Erweiterungen',
				onclick : function() {
					ed.execCommand(
						'mceInsertContent',
						false,
						wpAppbox_firefoxaddon_button()
					);
				},
				image: url + "/firefoxaddon.btn.png"
			});
			
		}
		
	});

	tinymce.PluginManager.add('wpAppbox', tinymce.plugins.wpAppbox_StoreButtons);
})();