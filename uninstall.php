<?php
// If uninstall not called from WordPress, then exit
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    exit;
}

// Call registered uninstall hook  
wp_page_top_text_uninstall();