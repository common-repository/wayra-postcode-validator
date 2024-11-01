<?php

/**
 *
 * @link              https://wayradigital.com
 * @since             1.0.0
 * @package           Wayra_Postcode_Validator
 *
 * @wordpress-plugin
 * Plugin Name:       Wayra - Validar Código Postal Argentino
 * Plugin URI:        https://wayradigital.com/plugins/wayra-postcode-validator
 * Description:       Plugin para WooCommerce que valida el Código Postal Argentino (formatos válidos 0000, X0000, X0000XXX).
 * Version:           1.0.1
 * Author:            Wayra Digtial
 * Author URI:        https://wayradigital.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wayra-postcode-validator
 * Domain Path:       /languages
 * WC tested up to: 6.1.1
 * Tested up to: 5.9.0
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'WAYRA_POSTCODE_VALIDATOR_VERSION', '1.0.1' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wayra-postcode-validator.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wayra_postcode_validator() {

	$plugin = new Wayra_Postcode_Validator();
	$plugin->run();

}
run_wayra_postcode_validator();
