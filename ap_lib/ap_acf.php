<?php
/**
 * Custom ACF functions
 */

if (function_exists('acf_add_options_sub_page')) {
	acf_add_options_page(array(
		'page_title' 	=> 'Site Preferences',
		'menu_title'	=> 'Site Preferences',
		'menu_slug' 	=> 'site-preferences',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}
