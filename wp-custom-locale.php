<?php
/*
Plugin Name: Custom Locale Filter
Plugin URI:  https://WebShayan.com
Description: Changes the locale for a specific page.
Version: 1.0.0
Author: Saleh Sharifi
Author URI:  https://WebShayan.com
License: GPLv2 or later
Text Domain: custom-locale-filter
*/
add_filter('locale', 'change_my_locale');
function change_my_locale( $locale ) {
	/* for each page or post repeat this code:
    if ( is_page('slug-here') ) {
        return 'en_US';
    }
	*/
	
	if ( is_page('your-page-slug') ) {
        return 'en_US';
    }
	
	
	
    return $locale;
	
}