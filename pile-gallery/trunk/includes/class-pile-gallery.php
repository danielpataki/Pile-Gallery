<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the dashboard.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Pile_Gallery
 * @subpackage Pile_Gallery/includes
 */

/**
 * The core plugin class.
 *
 * This is used to define internationalization, dashboard-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    Pile_Gallery
 * @subpackage Pile_Gallery/includes
 * @author     Your Name <email@example.com>
 */
class Pile_Gallery {

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      Pile_Gallery_Loader    $loader    Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $Pile_Gallery    The string used to uniquely identify this plugin.
	 */
	protected $Pile_Gallery;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the Dashboard and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {

		$this->Pile_Gallery = 'pile-gallery';
		$this->version = '1.0.0';

		$this->load_dependencies();
		$this->set_locale();
		$this->define_admin_hooks();
		$this->define_public_hooks();

	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - Pile_Gallery_Loader. Orchestrates the hooks of the plugin.
	 * - Pile_Gallery_i18n. Defines internationalization functionality.
	 * - Pile_Gallery_Admin. Defines all hooks for the dashboard.
	 * - Pile_Gallery_Public. Defines all hooks for the public side of the site.
	 *
	 * Create an instance of the loader which will be used to register the hooks
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function load_dependencies() {

		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-pile-gallery-loader.php';

		/**
		 * The class responsible for defining internationalization functionality
		 * of the plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-pile-gallery-i18n.php';

		/**
		 * The class responsible for defining all actions that occur in the Dashboard.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-pile-gallery-admin.php';

		/**
		 * The class responsible for defining all actions that occur in the public-facing
		 * side of the site.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-pile-gallery-public.php';

		/**
		 * The class responsible for adding all shortcodes we need
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-pile-gallery-shortcodes.php';

		/**
		 * TGM Activation to pull ACF in if needed
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/vendor/TGM-Plugin-Activation/class-tgm-plugin-activation.php';

		/**
		 * Taxonomy selector class for ACF
		 */
		if( function_exists( 'get_field' ) ) {
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/vendor/acf-advanced-taxonomy-selector/acf-advanced_taxonomy_selector.php';
		}

		if( function_exists( 'get_field' ) ) {
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/pile-gallery-options.php';
		}

		$this->loader = new Pile_Gallery_Loader();
		$this->shortcodes = new Pile_Gallery_Shortcodes();

	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the Pile_Gallery_i18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function set_locale() {

		$plugin_i18n = new Pile_Gallery_i18n();
		$plugin_i18n->set_domain( $this->get_Pile_Gallery() );

		$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );

	}

	/**
	 * Register all of the hooks related to the dashboard functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_admin_hooks() {

		$plugin_admin = new Pile_Gallery_Admin( $this->get_Pile_Gallery(), $this->get_version() );

		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );
		$this->loader->add_action( 'init', $plugin_admin, 'post_type' );
		$this->loader->add_action( 'tgmpa_register', $plugin_admin, 'required_plugins' );
		$this->loader->add_action( 'plugins_loaded', $plugin_admin, 'disable_acf_menu' );

		// Admin Post List Modifications
		$this->loader->add_filter( 'manage_pile_gallery_posts_columns', $plugin_admin, 'admin_list_columns' );
		$this->loader->add_action( 'manage_pile_gallery_posts_custom_column', $plugin_admin, 'admin_list_content', 10, 2 );

	}

	/**
	 * Register all of the hooks related to the public-facing functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_public_hooks() {

		$plugin_public = new Pile_Gallery_Public( $this->get_Pile_Gallery(), $this->get_version() );

		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );

	}

	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since    1.0.0
	 */
	public function run() {
		$this->loader->run();
	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since     1.0.0
	 * @return    string    The name of the plugin.
	 */
	public function get_Pile_Gallery() {
		return $this->Pile_Gallery;
	}

	/**
	 * The reference to the class that orchestrates the hooks with the plugin.
	 *
	 * @since     1.0.0
	 * @return    Pile_Gallery_Loader    Orchestrates the hooks of the plugin.
	 */
	public function get_loader() {
		return $this->loader;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since     1.0.0
	 * @return    string    The version number of the plugin.
	 */
	public function get_version() {
		return $this->version;
	}

}
