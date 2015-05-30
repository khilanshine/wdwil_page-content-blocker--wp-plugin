<?php

/* Coffee Page Settings */

	function wdwil_page_block_settings() {
		add_plugins_page( 'Wdwil Page Block Settings', 'Wdwil Page Block', 'update_core', 'wdwil_page_block_settings', 'wdwil_page_block_add_settings' );
	}
	add_action( 'admin_menu', 'wdwil_page_block_settings' );

	function wdwil_page_block_register_settings() {
		register_setting( 'wdwil_block_page', 'login_url' );
	}
	add_action( 'admin_init', 'wdwil_page_block_register_settings' );
		
	function wdwil_page_block_add_settings(){ // settings page function
	
		include (plugin_dir_path(__FILE__).'/settings-conditional.php');		
		
		?>
			<div class="wrap">
				<h2>Wdwil Page Block Settings</h2>
				<?php if( isset($_GET['settings-updated']) && $_GET['settings-updated'] ){ ?>
					<div id="setting-error-settings_updated" class="updated settings-error"> 
						<p><strong>Settings saved.</strong></p>
					</div>
				<?php } ?>
                
            	<form method="post" action="options.php">
                	<?php settings_fields( 'wdwil_block_page' ); ?>
                	<table class="form-table">
                		<tbody>
                    		
                            <tr>
                        		<th scope="row"><label for="login_url">Enter URL:</label></th>
                            	<td>
                                    <input class="regular-text" name="login_url" type="text" id="login_url" value="<?php echo esc_attr( $login_url ); ?>"><br />{ Above URL will be the redirected link of the login (website). }
								</td>
                        	</tr>
                            
                    	</tbody>
                    </table>
                    <p class="submit"><input id="submit" class="button button-primary" type="submit" name="submit" value="Save Changes"></p>
                </form>
                
                <?php echo "<br>
<div>Information:
<br><br>&nbsp;&nbsp;&nbsp;
-	This plugin will help you to block the content of the page from displaying to the non-logged in user.<br>&nbsp;&nbsp;&nbsp;
-	The short-code for this feature is [BLOCK-PAGE]<br>&nbsp;&nbsp;&nbsp;
-	To use this plugin you can do the below steps.<br>&nbsp;&nbsp;&nbsp;
1.	Go to the page that you want to block for the non-logged in user.<br>&nbsp;&nbsp;&nbsp;
2.	Paste the short-code there.<br>&nbsp;&nbsp;&nbsp;
That’s it !
</div>
<br>
For any difficulties please contact at <a href='www.wdwil.com'>www.wdwil.com</a> or Email: <u>khilan.s3@gmail.com</u> 
";?>
                
    <?php
	} // settings page function
	
?>