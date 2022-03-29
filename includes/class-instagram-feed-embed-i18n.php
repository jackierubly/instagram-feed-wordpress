<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.506studios.com
 * @since      1.0.0
 *
 * @package    Instagram_Feed_Embed
 * @subpackage Instagram_Feed_Embed/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Instagram_Feed_Embed
 * @subpackage Instagram_Feed_Embed/includes
 * @author     506 Studios <jackie@506studios.com>
 */
class Instagram_Feed_Embed_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'instagram-feed-embed',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
