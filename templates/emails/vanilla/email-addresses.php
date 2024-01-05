<?php
/**
 * Email Addresses
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates/Emails
 * @version 3.5.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$text_align = is_rtl() ? 'right' : 'left';
$address    = $order->get_formatted_billing_address();
$shipping   = $order->get_formatted_shipping_address();

?>
<table id="addresses" cellspacing="0" cellpadding="0" align="center" style="width: 100%; vertical-align: top;" border="0">
	<tr>
		<td class="addresses-td" width="50%" valign="top">
			<h3><?php _e( "Billing Address", 'email-control' ); ?></h3>
			
			<address class="address">
				<?php echo wp_kses_post( $address ? $address : esc_html__( 'N/A', 'email-control' ) ); ?>
				<?php if ( $order->get_billing_phone() ) : ?>
					<br/><?php echo esc_html( $order->get_billing_phone() ); ?>
				<?php endif; ?>
				<?php if ( $order->get_billing_email() ): ?>
					<br/><?php echo esc_html( $order->get_billing_email() ); ?>
				<?php endif; ?>
			</address>
		</td>
		<?php if ( ! wc_ship_to_billing_address_only() && $order->needs_shipping_address() && $shipping ) : ?>
			<td class="addresses-td" width="50%" valign="top">
				<h3><?php _e( "Shipping Address", 'email-control' ); ?></h3>
				<address class="address">
					<?php echo wp_kses_post( $shipping ); ?>
				</address>
			</td>
		<?php endif; ?>
	</tr>
</table>
