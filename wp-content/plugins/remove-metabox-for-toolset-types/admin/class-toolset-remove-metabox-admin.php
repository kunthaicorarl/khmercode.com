<?php
/**
 * The admin-specific functionality of the plugin.
 *
 * @link http://suitpress.com
 * @since 1.0.0
 *
 * @package Plugin_Name
 * @subpackage Plugin_Name/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package Plugin_Name
 * @subpackage Plugin_Name/admin
 * @author SuitPress <developer@suitpress.com>
 */
class Toolset_Remove_Metabox_Admin {
	/**
	 * The slug of this plugin.
	 *
	 * @since 1.0.0
	 * @access private
	 * @var string $plugin_slug The slug of this plugin.
	 */
	private $plugin_slug;

	/**
	 * The ID of this plugin.
	 *
	 * @since 1.0.0
	 * @access private
	 * @var string $plugin_name The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since 1.0.0
	 * @access private
	 * @var string $version The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since 1.0.0
	 * @param string $plugin_name The name of this plugin.
	 * @param string $version The version of this plugin.
	 */
	public function __construct($plugin_slug, $plugin_name, $version) {
		$this->plugin_slug = $plugin_slug;
		$this->plugin_name = $plugin_name;
		$this->version = $version;
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since 1.0.0
	 */
	public function enqueue_styles() {
		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		//wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'assets/css/' . $this->plugin_name . '-admin.css', array(), $this->version, 'all');
	}

	/**
	 * Register the javascript for the admin area.
	 *
	 * @since 1.0.0
	 */
	public function enqueue_scripts() {
		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		//wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'assets/js/' . $this->plugin_name . '-admin.js', array('jquery'), $this->version, false);
	}

	/**
	 * Removes a meta box or any other element from a particular post edit screen of a given post type.
	 *
	 * @since 1.0.0
	 */
	public function remove_metabox() {
		$args = array('public' => true);
		$output = 'names';
		$operator = 'and';
		$post_types = get_post_types($args, $output, $operator);
		foreach ((array)$post_types as $post_type) {
			foreach (array('normal', 'advanced', 'side') as $context) {
				remove_meta_box('types-information-table', $post_type, $context);
			}
		}
	}
}