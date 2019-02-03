<?php
/**
 * Plugin Name: Code Format
 * Plugin URI: https://github.com/gonzomir/code-format/
 * Description: Add code format button to the block editor.
 * Author: Milen Petrinski - Gonzo
 * Author URI: https://greatgonzo.net/
 * Version: 0.1
 * License: GPL3 or later
 * License URI: http://www.gnu.org/licenses/gpl-3.0.txt
 *
 * @package the-execerpt-block
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once plugin_dir_path( __FILE__ ) . 'inc/enqueue-assets.php';
