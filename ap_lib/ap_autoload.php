<?php
$ap_includes = [
    'ap_acf',    					// Custom ACF functions
    'ap_custom_posttypes',       	// Custom Post Types
    'ap_custom_taxonomy',			// Custom Taxonomies
    'ap_custom_styles',    			// Custom Styles
    'ap_custom',    				// General Custom Functions
    'ap_comment_form',    			// Custom Commment Form
    'ap_googleFonts',               // Woo Commerce
    'ap_gravity_forms',    			// Custom Gravity forms Amends and updates
    'ap_login',    					// Custom Login Amends
    'ap_pjax',                      // PJAX
    'ap_removals',    				// Custom Removals of Wordpress features
    'ap_thumbs',    				// Custom Thumbnail sizes
    'ap_widgets',                   // Custom load google font libraries
    'ap_woo',                       // Woo Commerce


    // Controllers
    'controllers/page-layout',
  ];
/*
foreach ($ap_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once($filepath);
}
unset($file, $filepath);
*/

array_map(function ($file) use ($sage_error) {
    $file = "../ap_lib/{$file}.php";
    if (!locate_template($file, true, true)) {
        $sage_error(sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file), 'File not found');
    }
}, $ap_includes);
