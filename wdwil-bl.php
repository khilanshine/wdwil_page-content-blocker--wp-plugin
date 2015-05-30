<?php
/*
Plugin Name: Wdwil Block Page
Description: Wordpress plugin to block page.
Version: 1.0
Author: wdwil.com
Author URI: http://wdwil.com
*/
?>
<?php

if ( is_admin() ){
	include (plugin_dir_path(__FILE__).'/settings-page.php');
	
}

//add shortcode to block any page if user is not logged in.
function block_page() {
	
	include (plugin_dir_path(__FILE__).'/settings-conditional.php');	
	
	if ( is_user_logged_in() ) {

	} else {
		echo "You can not view this file.<br> To view this file please <a href='" . $login_url . "'>Login</a>.";
		//echo "You can not view this file.<br> To view this file please <a href='http://google.com'>Login</a>.";
		exit;
	}
}
add_shortcode("block-page", 'block_page');

?>