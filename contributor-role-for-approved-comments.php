<?php
/**
 * Contributor role for approved comments
 *
 * A plugin, which give a contributor role by user for some approval comments.
 *
 * @package   Contributor_role_for_approved_comments
 * @author    Denis a-ka Hixon10 <Hixon@yandex.ru>
 * @license   GPL-2.0+
 * @link      http://hixon.ru/
 * @copyright 2014 Denis a-ka Hixon10
 *
 * @wordpress-plugin
 * Plugin Name:       Contributor role for approved comments
 * Plugin URI:        http://hixon.ru/
 * Description:       A plugin, which give a contributor role by user for some approval comments.
 * Version:           0.0.1
 * Author:            Denis a-ka Hixon10
 * Author URI:        http://hixon.ru/
 * Text Domain:       contributor-role-for-approved-comments
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/Hixon10
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/

require_once( plugin_dir_path( __FILE__ ) . 'public/class-contributor-role-for-approved-comments.php' );

/*
 * Register hooks that are fired when the plugin is activated or deactivated.
 * When the plugin is deleted, the uninstall.php file is loaded.
 */
register_activation_hook( __FILE__, array( 'Contributor_role_for_approved_comments', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'Contributor_role_for_approved_comments', 'deactivate' ) );

add_action( 'plugins_loaded', array( 'Contributor_role_for_approved_comments', 'get_instance' ) );

/*----------------------------------------------------------------------------*
 * Dashboard and Administrative Functionality
 *----------------------------------------------------------------------------*/

/*
 * @TODO:
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

	require_once( plugin_dir_path( __FILE__ ) . 'admin/class-contributor-role-for-approved-comments-admin.php' );
	add_action( 'plugins_loaded', array( 'Contributor_role_for_approved_comments_Admin', 'get_instance' ) );

}
