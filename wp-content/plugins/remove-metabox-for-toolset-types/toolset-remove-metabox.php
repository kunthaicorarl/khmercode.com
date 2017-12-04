<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link http://suitpress.com
 * @since 1.0.0
 * @package Plugin_Name
 *
 * @wordpress-plugin
 * Plugin Name: Toolset Types - Remove Front-end display metabox
 * Plugin URI: http://suitpress.com/plugins/toolset-remove-metabox/
 * Description: Remove Front-end display metabox from Toolset Types.
 * Version: 1.0.0
 * Author: SuitPress
 * Author URI: http://suitpress.com/
 * License: GPLv2 or later
 * License URI: http://suitpress.com/licenses/
 * Text Domain: toolset-remove-metabox
 * Domain Path: /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
	die;
}

// Makes sure the plugin is defined before trying to use it.
if (!function_exists('is_plugin_inactive')) {
	require_once ABSPATH . '/wp-admin/includes/plugin.php';
}

// Load pluggable functions.
if (!function_exists('wp_get_current_user')) {
	require_once ABSPATH . WPINC . '/pluggable.php';
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plugin-name-activator.php
 */
function activate_toolset_remove_metabox() {
	require_once plugin_dir_path(__FILE__) . 'includes/class-toolset-remove-metabox-activator.php';
	Toolset_Remove_Metabox_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-plugin-name-deactivator.php
 */
function deactivate_toolset_remove_metabox() {
	require_once plugin_dir_path(__FILE__) . 'includes/class-toolset-remove-metabox-deactivator.php';
	Toolset_Remove_Metabox_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_toolset_remove_metabox');
register_deactivation_hook(__FILE__, 'deactivate_toolset_remove_metabox');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require_once plugin_dir_path(__FILE__) . 'includes/class-toolset-remove-metabox.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since 1.0.0
 */
function run_toolset_remove_metabox() {
	$class = new Toolset_Remove_Metabox();
	$class->run();
}

// Automatically deactivate itself if some conditions are not met.
if (defined('TYPES_VERSION') || is_plugin_active('types/wpcf.php') || defined('TOOLSET_VERSION')) {
	run_toolset_remove_metabox();
} else {
	deactivate_plugins(plugin_basename(__FILE__));
}