<?php

/**
 * The dashboard-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Pile_Gallery
 * @subpackage Pile_Gallery/includes
 */

/**
 * The dashboard-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the dashboard-specific stylesheet and JavaScript.
 *
 * @package    Pile_Gallery
 * @subpackage Pile_Gallery/admin
 * @author     Your Name <email@example.com>
 */
class Pile_Gallery_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $name    The ID of this plugin.
	 */
	private $name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @var      string    $name       The name of this plugin.
	 * @var      string    $version    The version of this plugin.
	 */
	public function __construct( $name, $version ) {

		$this->name = $name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the Dashboard.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Pile_Gallery_Admin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Pile_Gallery_Admin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->name, plugin_dir_url( __FILE__ ) . 'css/pile-gallery-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the dashboard.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

	}

	/**
	 * Register the pile_gaellry custom post type.
	 *
	 * @since    1.0.0
	 */
	public function post_type() {
		$labels = array(
			'name'               => _x( 'Pile Galleries', 'post type general name', $this->name ),
			'singular_name'      => _x( 'Pile Gallery', 'post type singular name', $this->name ),
			'menu_name'          => _x( 'Pile Galleries', 'admin menu', $this->name ),
			'name_admin_bar'     => _x( 'Pile Gallery', 'add new on admin bar', $this->name ),
			'add_new'            => _x( 'Add New', 'pile_gallery', $this->name ),
			'add_new_item'       => __( 'New Pile Gallery', $this->name ),
			'new_item'           => __( 'New Pile Gallery', $this->name ),
			'edit_item'          => __( 'Edit Pile Gallery', $this->name ),
			'view_item'          => __( 'View Pile Gallery', $this->name ),
			'all_items'          => __( 'Pile Galleries', $this->name ),
			'search_items'       => __( 'Search Pile Galleries', $this->name ),
			'parent_item_colon'  => __( 'Parent Pile Galleries:', $this->name ),
			'not_found'          => __( 'No pile galleries found.', $this->name ),
			'not_found_in_trash' => __( 'No pile galleries found in Trash.', $this->name )
		);

		$args = array(
			'labels'              => $labels,
			'public'              => true,
			'exclude_from_search' => true,
			'show_in_nav_menus'   => false,
			'show_in_menu'        => 'upload.php',
			'query_var'           => true,
			'rewrite'             => array( 'slug' => 'pile_gallery' ),
			'capability_type'     => 'post',
			'hierarchical'        => false,
			'menu_position'       => null,
			'supports'            => array( 'title' )
		);

	    register_post_type( 'pile_gallery', $args );
	}

	/**
	 * Requires/recommends the plugins we need using the TGM activation class
	 *
	 * @since    1.0.0
	 */
	public function required_plugins() {

	    $plugins = array(

	        array(
	            'name'      => 'Advanced Custom Fields',
	            'slug'      => 'advanced-custom-fields',
	            'required'  => true,
	        ),

	        array(
	            'name'      => 'Media Categories',
	            'slug'      => 'media-categories-2',
	            'required'  => false,
	        ),


	    );

	    $config = array(
	        'default_path' => '',
	        'menu'         => 'tgmpa-install-plugins',
	        'has_notices'  => true,
	        'dismissable'  => false,
	        'is_automatic' => false,
	        'message'      => '',
	        'strings'      => array(
	            'page_title'                      => __( 'Install Required Plugins', $this->name ),
	            'menu_title'                      => __( 'Install Plugins', $this->name ),
	            'installing'                      => __( 'Installing Plugin: %s', $this->name ),
	            'oops'                            => __( 'Something went wrong with the plugin API.', $this->name ),
	            'notice_can_install_required'     => _n_noop( 'Pile Galleries requires the following plugin to function properly: %1$s.', 'Pile Galleries requires the following plugins to function properly: %1$s.' ),
	            'notice_can_install_recommended'  => _n_noop( 'Pile Galleries recommends the following plugin: %1$s.', 'Pile Galleries recommends the following plugins: %1$s.' ),
	            'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ),
	            'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ),
	            'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ),
	            'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ),
	            'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with Pile Galleries: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with Pile Galleries: %1$s.' ),
	            'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ),
	            'install_link'                    => _n_noop( 'Install plugin now', 'Install plugins now' ),
	            'activate_link'                   => _n_noop( 'Activate plugin now', 'Activate plugins now' ),
	            'return'                          => __( 'Return to Required Plugins Installer', $this->name ),
	            'plugin_activated'                => __( 'Plugin activated successfully.', $this->name ),
	            'complete'                        => __( 'All plugins installed and activated successfully. %s', $this->name ),
	            'nag_type'                        => 'updated'
	        )
	    );

	    tgmpa( $plugins, $config );


	}

	/**
	 * Defines additional columns for our galleries
	 *
	 * @since    1.0.0
	 */
	public function admin_list_columns( $defaults ) {
    	$defaults['shortcode']  = 'Shortcode';
    	return $defaults;
	}

	/**
	 * Defines the content for our additional columns
	 *
	 * @since    1.0.0
	 */
	public function admin_list_content( $column_name, $post_id ) {
		if( 'shortcode' == $column_name ) {
			echo "[pile_gallery id='" . $post_id . "']";
		}

	}


	/**
	 * Hides the ACF menu
	 *
	 * @since    1.0.2
	 */
	public function disable_acf_menu() {
		if( !defined( 'ACF_LITE' ) ) {
			define( 'ACF_LITE' , true );
		}
	}


}
