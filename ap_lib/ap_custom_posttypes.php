<?php
///
// Create Post Types Array
// Array order
// $function_safe = 'artists';
// $url_safe = 'artist-detail';
// $plural = 'Artists';
// $singular = 'Artist';
// associatedTaxonomy - comma separated list
///


// Register Custom Post Type
function ap_custom_post_types()
{
  $postTypes = array(
/*    array(
    'function' => 'partners',
    'labelPlural' => 'Partners',
    'labelSingle' => 'Partner',
    'url' => 'partner',
    'associatedTaxonomy' => '',
    'with_front' => false,
    )*/
);

  foreach ($postTypes as $postTypeKey => $postTypeValue) {
    $labels = array(
      'name'                  => _x($postTypeValue['labelPlural'], 'Post Type General Name', 'text_domain'),
      'singular_name'         => _x($postTypeValue['labelSingle'], 'Post Type Singular Name', 'text_domain'),
      'menu_name'             => __($postTypeValue['labelPlural'], 'text_domain'),
      'name_admin_bar'        => __('Post Type', 'text_domain'),
      'archives'              => __($postTypeValue['labelPlural'] . ' Archives', 'text_domain'),
      'parent_item_colon'     => __('Parent ' . $postTypeValue['labelSingle'], 'text_domain'),
      'all_items'             => __('All ' . $postTypeValue['labelPlural'], 'text_domain'),
      'add_new_item'          => __('Add New ' . $postTypeValue['labelSingle'], 'text_domain'),
      'add_new'               => __('Add New', 'text_domain'),
      'new_item'              => __('New ' . $postTypeValue['labelSingle'], 'text_domain'),
      'edit_item'             => __('Edit ' . $postTypeValue['labelSingle'], 'text_domain'),
      'update_item'           => __('Update ' . $postTypeValue['labelSingle'], 'text_domain'),
      'view_item'             => __('View ' . $postTypeValue['labelSingle'], 'text_domain'),
      'search_items'          => __('Search ' . $postTypeValue['labelSingle'], 'text_domain'),
      'not_found'             => __('Not found', 'text_domain'),
      'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
      'featured_image'        => __('Featured Image', 'text_domain'),
      'set_featured_image'    => __('Set featured image', 'text_domain'),
      'remove_featured_image' => __('Remove featured image', 'text_domain'),
      'use_featured_image'    => __('Use as featured image', 'text_domain'),
      'insert_into_item'      => __('Insert into ' . $postTypeValue['labelSingle'], 'text_domain'),
      'uploaded_to_this_item' => __('Uploaded to this ' . $postTypeValue['labelSingle'], 'text_domain'),
      'items_list'            => __($postTypeValue['labelPlural'] . ' list', 'text_domain'),
      'items_list_navigation' => __($postTypeValue['labelPlural'] . ' list navigation', 'text_domain'),
      'filter_items_list'     => __('Filter '. $postTypeValue['labelPlural'] .' list', 'text_domain')
    );
    $rewrite = array(
      'slug'                      => $postTypeValue['url'],
      'with_front'                => $postTypeValue['with_front'],
      'hierarchical'              => false,
    );
    $args = array(
      'label'                 => __($postTypeValue['labelPlural'], 'text_domain'),
      'description'           => __($postTypeValue['labelPlural'], 'text_domain'),
      'labels'                => $labels,
      'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', ),
      'taxonomies'            => array( $postTypeValue['associatedTaxonomy'] ),
      'hierarchical'          => true,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 10,
      'menu_icon'             => 'dashicons-welcome-write-blog',
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'has_archive'           => true,
      'exclude_from_search'   => false,
      'publicly_queryable'    => true,
      'capability_type'       => 'page',
      'rewrite'               => $rewrite
  );
    register_post_type($postTypeValue['function'], $args);
  }
}
add_action('init', 'ap_custom_post_types', 0);

