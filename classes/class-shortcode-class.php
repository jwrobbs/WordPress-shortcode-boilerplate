<?php
/**
 * The working class for the shortcode.
 *
 * This file should be included via autoloading.
 * Ensure the namespace matches the autoloader's requirements.
 *
 * @package jwr_boilerplate
 */

namespace jwr_boilerplate\working_class;

/**
 * Class Shortcode_Class
 */
class Shortcode_Class {
	/**
	 * Working function for the shortcode.
	 *
	 * @param array  $atts    Shortcode attributes.
	 * @param string $content Shortcode content.
	 *
	 * @return string
	 */
	public static function shortcode_fn( $atts, $content = null ) {
		if ( ! \is_array( $atts ) ) {
			$atts = array();
		}
		$atts = \array_change_key_case( $atts, CASE_LOWER ); // Normalize attribute keys to lowercase.
		$atts = \shortcode_atts(
			array( // This array holds the default values for the shortcode attributes.
				'key1' => 'default value 1',
				'key2' => 'default value 2',
				'key3' => 'default value 3',
			),
			$atts,
		);

		// Do stuff.

		return $content;
	}
}
