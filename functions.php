<?php
/**
 * @Packge       : Colorlib
 * @Version      : 1.0
 * @Author       : Colorlib
 * @Author       URI : http://colorlib.com/wp/
 *
 */

// Block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


/**
 *
 * Define constant
 *
 */

// Base URI
if ( ! defined( 'HUS_DIR_URI' ) ) {
	define( 'HUS_DIR_URI', get_template_directory_uri() . '/' );
}

// assets URI
if ( ! defined( 'HUS_DIR_ASSETS_URI' ) ) {
	define( 'HUS_DIR_ASSETS_URI', HUS_DIR_URI . 'assets/' );
}

// Css File URI
if ( ! defined( 'HUS_DIR_CSS_URI' ) ) {
	define( 'HUS_DIR_CSS_URI', HUS_DIR_ASSETS_URI . 'css/' );
}

// Js File URI
if ( ! defined( 'HUS_DIR_JS_URI' ) ) {
	define( 'HUS_DIR_JS_URI', HUS_DIR_ASSETS_URI . 'js/' );
}

// Images URI
if ( ! defined( 'HUS_DIR_IMGS_URI' ) ) {
	define( 'HUS_DIR_IMGS_URI', HUS_DIR_ASSETS_URI . 'img/' );
}

// Icon Images
if ( ! defined( 'HUS_DIR_ICON_IMG_URI' ) ) {
	define( 'HUS_DIR_ICON_IMG_URI', HUS_DIR_ASSETS_URI . 'img/icon/' );
}

// Base Directory
if ( ! defined( 'HUS_DIR_PATH' ) ) {
	define( 'HUS_DIR_PATH', get_parent_theme_file_path() . '/' );
}

//Inc Folder Directory
if ( ! defined( 'HUS_DIR_PATH_INC' ) ) {
	define( 'HUS_DIR_PATH_INC', HUS_DIR_PATH . 'inc/' );
}

//Hus Libraries Folder Directory
if ( ! defined( 'HUS_DIR_PATH_LIBS' ) ) {
	define( 'HUS_DIR_PATH_LIBS', HUS_DIR_PATH_INC . 'libraries/' );
}

//Classes Folder Directory
if ( ! defined( 'HUS_DIR_PATH_CLASSES' ) ) {
	define( 'HUS_DIR_PATH_CLASSES', HUS_DIR_PATH_INC . 'classes/' );
}

//Hooks Folder Directory
if ( ! defined( 'HUS_DIR_PATH_HOOKS' ) ) {
	define( 'HUS_DIR_PATH_HOOKS', HUS_DIR_PATH_INC . 'hooks/' );
}

// Admin Enqueue script
function hus_admin_script(){
    wp_enqueue_style( 'hus-admin', get_template_directory_uri().'/assets/css/hus-admin.css', false, '1.0.0' );
    wp_enqueue_script( 'hus_admin', get_template_directory_uri().'/assets/js/hus-admin.js', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'hus_admin_script' );



/**
 * Include File
 *
 */
require_once( HUS_DIR_PATH_INC . 'hus-breadcrumbs.php' );
require_once( HUS_DIR_PATH_INC . 'hus-widgets-reg.php' );
require_once( HUS_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
require_once( HUS_DIR_PATH_INC . 'post-like.php' );
require_once( HUS_DIR_PATH_INC . 'hus-functions.php' );
require_once( HUS_DIR_PATH_INC . 'hus-commoncss.php' );
require_once( HUS_DIR_PATH_INC . 'support-functions.php' );
require_once( HUS_DIR_PATH_INC . 'wp-html-helper.php' );
require_once( HUS_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
require_once( HUS_DIR_PATH_INC . 'customizer/customizer.php' );
require_once( HUS_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
require_once( HUS_DIR_PATH_CLASSES . 'Class-Config.php' );
require_once( HUS_DIR_PATH_HOOKS . 'hooks.php' );
require_once( HUS_DIR_PATH_HOOKS . 'hooks-functions.php' );
require_once( HUS_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
require_once( HUS_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );

/**
 * Instantiate Hus object
 *
 * Inside this object:
 * Enqueue scripts, Google font, Theme support features, Epsilon Dashboard .
 *
 */

$Hus = new Hus();