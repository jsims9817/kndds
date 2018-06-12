<?php
/**
 * Custom functions
 */
/* Disable the theme / plugin text editor in Admin */
define('DISALLOW_FILE_EDIT', true);

/* Allow Shortcodes in widgets */
add_filter('widget_text', 'do_shortcode');

/* Allow SVG uploads to the media */
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

// custom excerpt length
function themify_custom_excerpt_length( $length ) {
   return 20;
}
add_filter( 'excerpt_length', 'themify_custom_excerpt_length', 999 );

// add more link to excerpt
function themify_custom_excerpt_more($more) {
   global $post;
   return '';
}
add_filter('excerpt_more', 'themify_custom_excerpt_more');


function register_my_menus() {
  register_nav_menus(
    array(
      'footer-1' => __( 'Footer Left' ),
      'footer-2' => __( 'Footer Right' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

function searchfilter($query) {

    if ($query->is_search && !is_admin() ) {
        $query->set('post_type',array('post','page'));
    }

return $query;
}

add_filter('pre_get_posts','searchfilter');

function my_search_form( $form ) {
    $form = '<form role="search" method="get" class="search-form" action="' . home_url( '/' ) . '" >
    <div>
        <label class="screen-reader-text" for="s">' . __( 'Search for:' ) . '</label>
        <input type="search" class="search-field" placeholder="Search" value="' . get_search_query() . '" name="s" id="s" />
        <button type="submit" id="btn btn--search" value="'. esc_attr__( 'Search' ) .'">
        <i class="icon icon-search"></i>
        </button>
    </div>
    </form>';

    return $form;
}

add_filter( 'get_search_form', 'my_search_form', 100 );

function cleanString($sectionID){

    $sectionID = str_replace(' ', '-', get_sub_field( 'row_id' )); // Replaces all spaces with hyphens.
    $sectionID = preg_replace('/[^A-Za-z0-9\-]/', '', $sectionID); // Removes special chars.

    echo strtolower($sectionID);
}

// Enqueue scripts
function ap_theme_scripts()
{
wp_enqueue_script( 
	  'google-maps', 
	  '//maps.googleapis.com/maps/api/js?key=AIzaSyAhT7E2F4hF2Q2cFHnvz-CnhBvvcthTrMw', 
	  array('sage/main.js'), 
	  '1.0', 
	  true 
	);
}
add_action( 'wp_enqueue_scripts', 'ap_theme_scripts');