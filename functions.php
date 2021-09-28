<?php
/**
 * Theme Functions.
 *
 * @package NetWarriorServices
 */


if ( ! defined( 'NETWARRIORSERVICES_DIR_PATH' ) ) {
	define( 'NETWARRIORSERVICES_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'NETWARRIORSERVICES_DIR_URI' ) ) {
	define( 'NETWARRIORSERVICES_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

if ( ! defined( 'NETWARRIORSERVICES_BUILD_URI' ) ) {
	define( 'NETWARRIORSERVICES_BUILD_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build' );
}

if ( ! defined( 'NETWARRIORSERVICES_BUILD_PATH' ) ) {
	define( 'NETWARRIORSERVICES_BUILD_PATH', untrailingslashit( get_template_directory() ) . '/assets/build' );
}

if ( ! defined( 'NETWARRIORSERVICES_BUILD_JS_URI' ) ) {
	define( 'NETWARRIORSERVICES_BUILD_JS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/js' );
}

if ( ! defined( 'NETWARRIORSERVICES_BUILD_JS_DIR_PATH' ) ) {
	define( 'NETWARRIORSERVICES_BUILD_JS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/build/js' );
}

if ( ! defined( 'NETWARRIORSERVICES_BUILD_IMG_URI' ) ) {
	define( 'NETWARRIORSERVICES_BUILD_IMG_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/src/img' );
}

if ( ! defined( 'NETWARRIORSERVICES_BUILD_CSS_URI' ) ) {
	define( 'NETWARRIORSERVICES_BUILD_CSS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/css' );
}

if ( ! defined( 'NETWARRIORSERVICES_BUILD_CSS_DIR_PATH' ) ) {
	define( 'NETWARRIORSERVICES_BUILD_CSS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/build/css' );
}

if ( ! defined( 'NETWARRIORSERVICES_BUILD_LIB_URI' ) ) {
	define( 'NETWARRIORSERVICES_BUILD_LIB_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/library' );
}

require_once NETWARRIORSERVICES_DIR_PATH . '/inc/helpers/autoloader.php';
require_once NETWARRIORSERVICES_DIR_PATH . '/inc/helpers/template-tags.php';

function netwarriorservices_get_theme_instance() {
	\NETWARRIORSERVICES_THEME\Inc\NETWARRIORSERVICES_THEME::get_instance();
}

netwarriorservices_get_theme_instance();
