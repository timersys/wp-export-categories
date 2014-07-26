<?php
/**
 *
 * @package   Wp Export Categories & Taxonomies
 * @author    Damian Logghe <info@timersys.com>
 * @license   GPL-2.0+
 * @link      http://wp.timersys.com
 * @copyright 2013Timersys
 *
 * @wordpress-plugin
 * Plugin Name:       Wp Export Categories & Taxonomies
 * Plugin URI:        http://wp.timersys.com
 * Description:       Simple tool to export categories and terms into other sites
 * Version:           1.0.3
 * Author:            timersys
 * Author URI:        http://wp.timersys.com
 * Text Domain:       ect
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
        die;
}

/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/
// Plugin version
if ( ! defined( 'ECT_VERSION' ) )
        define( 'ECT_VERSION', '1.0.3' );

// Plugin Folder Path
if ( ! defined( 'ECT_PLUGIN_DIR' ) )
        define( 'ECT_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

// Plugin Folder URL
if ( ! defined( 'ECT_PLUGIN_URL' ) )
        define( 'ECT_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

// Plugin Root File
if ( ! defined( 'ECT_PLUGIN_FILE' ) )
        define( 'ECT_PLUGIN_FILE', __FILE__ );
/*
 * @TODO:
 *
 * - replace `class-plugin-name.php` with the name of the plugin's class file
 *
 */
require_once( plugin_dir_path( __FILE__ ) . 'public/ect.php' );

/*
 * Register hooks that are fired when the plugin is activated or deactivated.
 * When the plugin is deleted, the uninstall.php file is loaded.
 *
 * @TODO:
 *
 * - replace Plugin_Name with the name of the class defined in
 *   `class-plugin-name.php`
 */
register_activation_hook( __FILE__, array( 'WP_Ect', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'WP_Ect', 'deactivate' ) );

/*
 * @TODO:
 *
 * - replace Plugin_Name with the name of the class defined in
 *   `class-plugin-name.php`
 */
add_action( 'plugins_loaded', array( 'WP_Ect', 'get_instance' ) );

/*----------------------------------------------------------------------------*
 * Dashboard and Administrative Functionality
 *----------------------------------------------------------------------------*/

/*
 * @TODO:
 *
 * - replace `class-plugin-admin.php` with the name of the plugin's admin file
 * - replace Plugin_Name_Admin with the name of the class defined in
 *   `class-plugin-name-admin.php`
 *
 * If you want to include Ajax within the dashboard, change the following
 * conditional to:
 *
 * if ( is_admin() ) {
 *   ...
 * }
 *
 * The code below is intended to to give the lightest footprint possible.
 */
if ( is_admin() && ( ! defined( 'DOING_AJAX' ) || ! DOING_AJAX ) ) {

        require_once( plugin_dir_path( __FILE__ ) . 'admin/ect-admin.php' );
        add_action( 'plugins_loaded', array( 'WP_Ect_Admin', 'get_instance' ) );

}