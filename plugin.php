<?php

add_plugin_hook('admin_theme_footer', 'google_translate_admin_theme_footer');

function google_translate_admin_theme_footer()
{ ?>

	<div id="google_translate_element"></div><script>
	function googleTranslateElementInit() {
	  new google.translate.TranslateElement({
	    pageLanguage: 'en'
	  }, 'google_translate_element');
	}
	</script><script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	
<?php }