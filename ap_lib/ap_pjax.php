<?php
add_filter( 'body_class', 'custom_class' );
function custom_class( $classes ) {
    $classes[] = 'pjax';
    return $classes;
}
