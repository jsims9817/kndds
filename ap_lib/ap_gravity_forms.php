<?php
/**
 * Custom Gravtiy Forms Overrides and modifications
 */
 
/* Function to make the address fields GravityForms more British.  */
function customiseFormLabels($addressTypes, $formID) {
    $addressTypes['international']['zip_label'] = 'Post Code';
    $addressTypes['international']['state_label'] = 'County';
    return $addressTypes;
}
 
/* Use this one to change all gravity address forms to be more British */
add_filter('gform_address_types', 'customiseFormLabels', 10, 2);

function gf_spinner_replace( $image_src, $form ) {
	return  'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7'; // relative to you theme images folder
}
add_filter( 'gform_ajax_spinner_url', 'gf_spinner_replace', 10, 2 );

add_filter('gform_confirmation_anchor', '__return_false');