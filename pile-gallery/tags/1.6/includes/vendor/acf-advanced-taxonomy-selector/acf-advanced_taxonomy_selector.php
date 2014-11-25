<?php

/*
Plugin Name: Advanced Custom Fields: Advanced Taxonomy Selector
Plugin URI: https://github.com/danielpataki/acf-advanced-taxonomy-selector
Description: This plugin allows you to create a field where users can select terms from multiple taxonomies
Version: 2.0
Author: Daniel Pataki
Author URI: http://danielpataki.com
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/


// Load Text Domain
load_plugin_textdomain( 'acf-advanced_taxonomy_selector', false, dirname( plugin_basename(__FILE__) ) . '/lang/' );

/**
 * Include Field Type For ACF5
 */
function include_field_types_advanced_taxonomy_selector( $version ) {
	include_once('acf-advanced_taxonomy_selector-v5.php');
}

// Action To Include Field Type For ACF5
add_action('acf/include_field_types', 'include_field_types_advanced_taxonomy_selector');

/**
 * Include Field Type For ACF4
 */
function register_fields_advanced_taxonomy_selector() {
	include_once('acf-advanced_taxonomy_selector-v4.php');
}

// Action To Include Field Type For ACF4
add_action('acf/register_fields', 'register_fields_advanced_taxonomy_selector');	


?>