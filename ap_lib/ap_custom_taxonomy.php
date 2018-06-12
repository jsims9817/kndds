<?php

/**
 * Custom Taxonomies are easy as pie to set up and configure how you like!
 */

// Register Custom Taxonomy
function ap_custom_taxonomy() {
  $postTaxonomies = array(
    /*array(
    'function' => 'portfolio_category',
    'labelPlural' => 'Categories',
    'labelSingle' => 'Category',
    'url' => 'artist-category',
    'associatedPostType' => 'artists'
    ),*/
  );

  foreach ($postTaxonomies as $postTaxonomiesKey => $postTaxonomiesValue) {
    $labels = array(
      'name'                       => _x( $postTaxonomiesValue['labelPlural'], 'Taxonomy General Name', 'text_domain' ),
      'singular_name'              => _x( $postTaxonomiesValue['labelSingle'], 'Taxonomy Singular Name', 'text_domain' ),
      'menu_name'                  => __( $postTaxonomiesValue['labelSingle'], 'text_domain' ),
      'all_items'                  => __( 'All ' . $postTaxonomiesValue['labelPlural'], 'text_domain' ),
      'parent_item'                => __( 'Parent ' . $postTaxonomiesValue['labelSingle'], 'text_domain' ),
      'parent_item_colon'          => __( 'Parent ' . $postTaxonomiesValue['labelSingle'], 'text_domain' ),
      'new_item_name'              => __( 'New ' . $postTaxonomiesValue['labelSingle'] . ' Name', 'text_domain' ),
      'add_new_item'               => __( 'Add New ' . $postTaxonomiesValue['labelSingle'], 'text_domain' ),
      'edit_item'                  => __( 'Edit ' . $postTaxonomiesValue['labelSingle'], 'text_domain' ),
      'update_item'                => __( 'Update ' . $postTaxonomiesValue['labelSingle'], 'text_domain' ),
      'view_item'                  => __( 'View ' . $postTaxonomiesValue['labelSingle'], 'text_domain' ),
      'separate_items_with_commas' => __( 'Separate ' . $postTaxonomiesValue['labelSingle'] . ' with commas', 'text_domain' ),
      'add_or_remove_items'        => __( 'Add or remove ' . $postTaxonomiesValue['labelPlural'], 'text_domain' ),
      'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
      'popular_items'              => __( 'Popular ' . $postTaxonomiesValue['labelPlural'], 'text_domain' ),
      'search_items'               => __( 'Search ' . $postTaxonomiesValue['labelPlural'], 'text_domain' ),
      'not_found'                  => __( 'Not Found', 'text_domain' ),
      'no_terms'                   => __( 'No ' . $postTaxonomiesValue['labelPlural'], 'text_domain' ),
      'items_list'                 => __( $postTaxonomiesValue['labelPlural'] . ' list', 'text_domain' ),
      'items_list_navigation'      => __( $postTaxonomiesValue['labelPlural'] . ' list navigation', 'text_domain' ),
    );
    $rewrite = array(
      'slug'                      => $postTaxonomiesValue['url'],
      'with_front'                => true,
      'hierarchical'              => true,
    );
    $args = array(
      'labels'                     => $labels,
      'hierarchical'               => true,
      'public'                     => true,
      'show_ui'                    => true,
      'show_admin_column'          => true,
      'show_in_nav_menus'          => true,
      'show_tagcloud'              => true,
      'rewrite'                    => $rewrite
    );
    register_taxonomy( $postTaxonomiesValue['function'], array( $postTaxonomiesValue['associatedPostType'] ), $args );
  }

}
add_action( 'init', 'ap_custom_taxonomy', 0 );
