<?php
/**
 * Enqueue JS for the code format.
 *
 * @since   0.0.1
 * @package the-execerpt-block
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue assets for the block editor.
 *
 * `wp-blocks`: includes block type registration and related functions.
 * `wp-element`: includes the WordPress Element abstraction for describing the structure of your blocks.
 * `wp-i18n`: To internationalize the block's text.
 *
 * @since 0.0.1
 */
function code_format_assets() {
	wp_enqueue_script(
		'code-format-js',
		plugins_url( '/assets/javascript/code-format.js', dirname( __FILE__ ) ),
		array( 'wp-rich-text', 'wp-editor', 'wp-data', 'wp-element', 'wp-i18n' ),
		filemtime( plugin_dir_path( __DIR__ ) . 'assets/javascript/code-format.js' ),
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'code_format_assets' );
