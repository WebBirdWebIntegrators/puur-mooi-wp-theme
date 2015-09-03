<?php 

// remove WPML language switcher from admin bar
function webbird_wpml_remove_admin_bar_menu() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('WPML_ALS');
     
}
//add_action( 'wp_before_admin_bar_render', 'webbird_wpml_remove_admin_bar_menu' );

?>