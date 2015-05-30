<?php

/* Coffee Page Settings */

	function WPTime_coffee_page_settings() {
		add_plugins_page( 'Wdwil Block Page Settings', 'Wdwil Block Page', 'update_core', 'WPTime_coffee_page_settings', 'WPTime_coffee_page_settings_page' );
	}
	add_action( 'admin_menu', 'WPTime_coffee_page_settings' );

	function wdwil_block_page_register_settings() {
		register_setting( 'WPTime_coffee_page_setting', 'wptcoffeepage_title' );
	}
	add_action( 'admin_init', 'wdwil_block_page_register_settings' );
		
	function WPTime_coffee_page_settings_page(){ // settings page function
	
		include (plugin_dir_path(__FILE__).'/settings-conditional.php');		
		
		?>
			<div class="wrap">
				<h2>Coffee Page Settings</h2>
				<?php if( isset($_GET['settings-updated']) && $_GET['settings-updated'] ){ ?>
					<div id="setting-error-settings_updated" class="updated settings-error"> 
						<p><strong>Settings saved.</strong></p>
					</div>
				<?php } ?>
                
            	<form method="post" action="options.php">
                	<?php settings_fields( 'WPTime_coffee_page_setting' ); ?>
                	<table class="form-table">
                		<tbody>
                    		
                            <tr>
                        		<th scope="row"><label for="wptcoffeepage_title">Enter URL:</label></th>
                            	<td>
                                    <input class="regular-text" name="wptcoffeepage_title" type="text" id="wptcoffeepage_title" value="<?php echo esc_attr( $title ); ?>">
								</td>
                        	</tr>
                            
                    	</tbody>
                    </table>
                    <p class="submit"><input id="submit" class="button button-primary" type="submit" name="submit" value="Save Changes"></p>
                </form>
    <?php
	} // settings page function
	
?>