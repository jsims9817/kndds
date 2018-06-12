<?php
/**
 * Custom Login Functions and adaptions
 */
function apl_wp_login_url() {
	return $client__login = "http://www.thelightonline.co.uk"; // or return any other title you want
}
function apl_wp_login_title() {
	return $client__login = "The Light Online"; // or return any other title you want
}

/* these change the default links from wordpress to whatever you want */
add_filter('login_headertitle', 'apl_wp_login_title');
add_filter('login_headerurl', 'apl_wp_login_url');

/* Obscure login screen error messages */
function wpfme_login_obscure() {
	return '<strong>Sorry</strong>: Think you have gone wrong somewhere!';
}
add_filter( 'login_errors', 'wpfme_login_obscure' );

/* calling your own login css so you can style it */
function login_css() {
	echo '<link rel="stylesheet" href="' . get_template_directory_uri() . '/assets/css/login.css">';
}
add_action('login_head', 'login_css');
