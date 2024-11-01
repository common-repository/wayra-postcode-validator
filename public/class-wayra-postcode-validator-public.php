<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://wayradigital.com
 * @since      1.0.0
 *
 * @package    Wayra_Postcode_Validator
 * @subpackage Wayra_Postcode_Validator/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Wayra_Postcode_Validator
 * @subpackage Wayra_Postcode_Validator/public
 * @author     Wayra Digtial <wp@wayramarketing.com.ar>
 */
class Wayra_Postcode_Validator_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the JavaScript to validate billing and shipping postcode on checkout.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wayra-postcode-validator-public.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Validate billing and shipping postcode on checkout.
	 *
	 * @since    1.0.0
	 */
	function validate_postcode() {
		$billing_country = strtoupper( filter_input( INPUT_POST, 'billing_country' ) );
		$billing_postcode = strtoupper( filter_input( INPUT_POST, 'billing_postcode' ) );
		$shipping_country = strtoupper( filter_input( INPUT_POST, 'shipping_country' ) );
		$shipping_postcode = strtoupper( filter_input( INPUT_POST, 'shipping_postcode' ) );
		$ship_to_different_address = filter_input( INPUT_POST, 'ship_to_different_address' );
		$pattern = '/^([A-Z]{1}\d{4}[A-Z]{3}|[A-Z]{1}\d{4}|\d{4})$/';

		if ( 'AR' === $billing_country ) {
			if ( strlen( trim ( preg_replace( $pattern, '', $billing_postcode ) ) ) > 0 ) {
				wc_add_notice( __('<strong>Facturación Código Postal</strong>, debe estar en formato 0000, o X0000, o X0000XXX.', 'wayra-postcode-validator'), 'error' );
			}
		}

		if ( 'AR' === $shipping_country && ! empty( $ship_to_different_address ) ) {
			if ( strlen( trim ( preg_replace( $pattern, '', $shipping_postcode ) ) ) > 0 ) {
				wc_add_notice( __('<strong>Envío Código Postal</strong>, debe estar en formato 0000, o X0000, o X0000XXX.', 'wayra-postcode-validator'), 'error' );
			}
		}
	}

	/**
	 * Add billing and shipping postcode placeholder.
	 *
	 * @since    1.0.0
	 */
	function set_postcode_placeholder( $fields ) {
		$fields['billing']['billing_postcode']['placeholder'] = __( 'Formato 0000, o X0000, o X0000XXX', 'wayra-postcode-validator' );
		$fields['shipping_postcode']['placeholder'] = __( 'Formato 0000, o X0000, o X0000XXX', 'wayra-postcode-validator' );
		return $fields;
	}
}
