<?php
/**
 * WordPress shortcode boilerplate
 *
 * @package jwr_boilerplate
 */

namespace jwr_boilerplate;

/**
 * Basic shortcode boilerplate
 *
 * @return string
 */
function basic_shortcode_fn() {

	// Do something.
	// Return something.

	return 'Hello World!';
}
\add_shortcode( 'basic_shortcode', __NAMESPACE__ . '\basic_shortcode_fn' );

/**
 * Basic shortcode with attributes boilerplate
 *
 * @param array $atts Shortcode attributes.
 *
 * @return string
 */
function basic_attributes_shortcode_fn( $atts ) {
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

	// Do something.

	return print_r( $atts, true );
}
\add_shortcode( 'attributes_shortcode', __NAMESPACE__ . '\attributes_shortcode_fn' );

/**
 * Basic enclosing shortcode boilerplate.
 *
 * Enclosing shortcodes have a start and end tag and wrap content.
 * Example: [enclosing_shortcode]content[/enclosing_shortcode]
 *
 * @param array  $atts    Shortcode attributes.
 * @param string $content Shortcode content.
 *
 * @return string
 */
function basic_enclosing_shortcode_fn( $atts, $content = null ) {
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
add_shortcode( 'self_enclosing_shortcode', __NAMESPACE__ . '\self_enclosing_shortcode_fn' );

require_once __DIR__ . '/classes/class-shortcode-class.php';
/**
 * Exposed function for class-based enclosing shortcode boilerplate.
 *
 * @param array  $atts    Shortcode attributes.
 * @param string $content Shortcode content.
 *
 * @return string
 */
function class_based_enclosing_shortcode_fn( $atts, $content = null ) {
	return working_class\Shortcode_Class::shortcode_fn( $atts, $content );
}
\add_shortcode( 'class_based_enclosing_shortcode', __NAMESPACE__ . '\class_based_enclosing_shortcode_fn' );
