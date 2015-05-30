<?php

		if( get_option('login_url') ){
			$login_url = get_option('login_url');
		}else{
			$login_url = get_bloginfo('name');
		}
		
		
?>