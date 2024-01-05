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
		<td width="50%" valign="top" class="addresses-td order_items_table_column_pading_first">
			<p><strong><?php _e( "Billing address", 'email-control' ); ?>:</strong></p>

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
			<td width="50%" valign="top" class="addresses-td order_items_table_column_pading_last">
				<p><strong><?php _e( "Shipping address", 'email-control' ); ?>:</strong></p>
				
				<address class="address">
					<?php echo $shipping; ?>
				</address>
			</td>
		<?php endif; ?>
	</tr>
</table>
