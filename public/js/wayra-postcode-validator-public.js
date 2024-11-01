(function( $ ) {
	'use strict';

	$( document ).ready(function() {
		$( document.body ).on('update_checkout', () => {
			const pattern = new RegExp(/^([A-Z]{1}\d{4}[A-Z]{3}|[A-Z]{1}\d{4}|\d{4})$/);
	
			if ( $('#billing_country').val() == 'AR' && $('#billing_postcode').val() ) {
				if ( ! pattern.test( $('#billing_postcode').val().toUpperCase()  ) ) {
					$('#billing_postcode_field').removeClass( 'woocommerce-validated' ).addClass( 'woocommerce-invalid woocommerce-invalid-postcode' );
				}
			}
	
			if ( $('#ship-to-different-address-checkbox').is(':checked') && $('#shipping_country').val() == 'AR' && $('#shipping_postcode').val() ) {
				if ( ! pattern.test( $('#shipping_postcode').val().toUpperCase()  ) ) {
					$('#shipping_postcode_field').removeClass( 'woocommerce-validated' ).addClass( 'woocommerce-invalid woocommerce-invalid-postcode' );
				}
			}
		});
	});

})( jQuery );
