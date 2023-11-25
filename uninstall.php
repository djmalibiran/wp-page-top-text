<?php
// If uninstall not called from WordPress, then exit
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    die;
}

// Delete options
delete_option('wp_page_top_text');
delete_option('wp_page_top_text_bg_color'); 
delete_option('wp_page_top_text_color');

// Clear caches
wp_cache_flush();