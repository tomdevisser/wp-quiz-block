<?php
/**
 * Plugin Name:       Quiz
 * Description:       Example block scaffolded with Create Block tool.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       quiz
 *
 * @package           create-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function create_block_quiz_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'create_block_quiz_block_init' );

add_action( 'wp_enqueue_scripts', 'quiz_scripts' );
function quiz_scripts() {
	wp_enqueue_script( 'quiz', plugins_url( 'quiz.js', __FILE__ ), array( 'wp-blocks', 'wp-element', 'wp-components', 'wp-editor' ), '1.0', true );
}
