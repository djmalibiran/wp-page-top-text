<?php

/**
 * Plugin Name: WP Page Top Text
 * Description: Adds custom text above pages with Customizer section to customize text.
 * Version: 1.1.0
 * Author: Daryl Malibiran
 * Author URI: https://malibiran.com
 */

// Function to display the text to the top of every pages
function wp_page_top_text() {
	$text = get_theme_mod( 'wp_page_top_text' );
	$text_color = sanitize_hex_color( get_theme_mod( 'wp_page_top_text_color' ) );
	$background_color = sanitize_hex_color( get_theme_mod( 'wp_page_top_text_bg_color' ) );

	$style = 'text-align: center;' .
		( ! empty( $text_color ) ? 'color: ' . esc_attr( $text_color ) . ';' : '' ) .
		( ! empty( $background_color ) ? 'background-color: ' . esc_attr( $background_color ) . ';' : '' );

	echo ( ! empty( $text ) ? '<div class="wp-page-top-text" style="' . $style . '">' . esc_html( $text ) . '</div>' : '' );
}
add_action( 'wp_body_open', 'wp_page_top_text' );

// Function to add entry to WP Customizer (Dashboard > Appearance > Customize > Page Top Text)
function wp_page_top_text_customizer( $wp_customize ) {

	$wp_customize->add_section( 'wp_page_top_text', array(
		'title'    => __( 'Page Top Text', 'wp-page-top-text' ),
		'priority' => 30,
	) );

	$wp_customize->add_setting( 'wp_page_top_text', array(
		'sanitize_callback' => 'sanitize_textarea_field',
	) );

	$wp_customize->add_control( 'wp_page_top_text', array(
		'label'       => __( 'Page Top Text', 'wp-page-top-text' ),
		'section'     => 'wp_page_top_text',
		'type'        => 'textarea',
		'input_attrs' => array(
			'maxlength' => 70,
		),
	) );

	$wp_customize->add_setting( 'wp_page_top_text_bg_color' );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wp_page_top_text_bg_color', array(
		'label'   => __( 'Background Color', 'wp-page-top-text' ),
		'section' => 'wp_page_top_text',
	) ) );

	$wp_customize->add_setting( 'wp_page_top_text_color' );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wp_page_top_text_color', array(
		'label'   => __( 'Text Color', 'wp-page-top-text' ),
		'section' => 'wp_page_top_text',
	) ) );
}
add_action( 'customize_register', 'wp_page_top_text_customizer' );

function wp_page_top_text_uninstall() {
	// Remove specific data from theme_mods_{$theme_slug}
	$theme_slug = get_option( 'stylesheet' );
	$theme_mods = get_option( "theme_mods_{$theme_slug}" );

	if ( $theme_mods && isset( $theme_mods['wp_page_top_text'] ) ) {
		unset( $theme_mods['wp_page_top_text'] );
		unset( $theme_mods['wp_page_top_text_bg_color'] );
		unset( $theme_mods['wp_page_top_text_color'] );

		update_option( "theme_mods_{$theme_slug}", $theme_mods );
	}

	// Remove plugin-generated data from wp_postmeta table (example: post meta)
	global $wpdb;
	$wpdb->query(
		"DELETE FROM {$wpdb->prefix}posts WHERE post_content LIKE '%wp_page_top_text%'"
	);
}
register_uninstall_hook( __FILE__, 'wp_page_top_text_uninstall' );