<?php
namespace App;

/*function pageLayout($data){

    if ( have_rows( 'single_page_rep' ) ) {
        $id = 0;
        while ( have_rows( 'single_page_rep' ) ) {
            the_row();
            $data['row_id'][$id] = get_sub_field( 'row_id' );
            $data['row_slug'][$id] = cleanString(get_sub_field( 'row_id' ));
            $id++;
        }

    }

    return $data;
}

add_filter( 'sage/template/home/data', 'App\\pageLayout' );
*/