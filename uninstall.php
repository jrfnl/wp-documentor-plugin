<?php
/**
 * WordPress Hook Documentor Plugin Uninstall Functions
 *
 * Code used when the plugin is removed (not just deactivated but actively deleted through the WordPress Admin).
 *
 * @package wp-hook-documentor
 * @subpackage Uninstall
 * @since 1.0
 * @version 1.0
 *
 * @author Juliette Reinders Folmer
 *
 * @copyright 2013Juliette Reinders Folmer
 * @license http://creativecommons.org/licenses/GPL/2.0/ GNU General Public License, version 2
 */

if( !current_user_can( 'activate_plugins' ) || ( !defined( 'ABSPATH' ) || !defined( 'WP_UNINSTALL_PLUGIN' ) ) )
    exit();

delete_option( 'wp_hook_documentor_cache' );