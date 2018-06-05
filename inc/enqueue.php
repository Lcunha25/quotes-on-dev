<?php
/**
 * Quotes on Dev Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package QOD_Starter_Theme
 */

/**
 * Enqueue scripts and styles.
 */
function qod_scripts() {
	wp_enqueue_style( 'qod-style', get_stylesheet_uri() );

  wp_enqueue_script( 'qod-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );
  wp_enqueue_style( 'qod-fontawesome', 'https://use.fontawesome.com/releases/v5.0.10/css/all.css' );

  $script_url = get_template_directory_uri() . '/js/main.js';
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'red_comments', $script_url, array( 'jquery' ), false, true );
  wp_localize_script( 'red_comments', 'red_vars', array(
    'rest_url' => esc_url_raw( rest_url() ),
    'wpapi_nonce' => wp_create_nonce( 'wp_rest' ),
    'filter' => 'filter[orderby]=rand&filter[posts_per_page]=1',
    'get_url' => esc_url_raw( get_site_url()),
  ));
}
add_action( 'wp_enqueue_scripts', 'qod_scripts');

?>