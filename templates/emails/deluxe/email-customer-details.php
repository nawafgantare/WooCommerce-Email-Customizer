<?php
/**
 * Additional Customer Details
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates/Emails
 * @version 2.5.0
 */

defined( 'ABSPATH' ) || exit;
?>
<?php if ( ! empty( $fields ) ) : ?>
	<?php echo ec_special_title( __( "Customer details", 'email-control'), array("border_position" => "center", "text_position" => "center") ); ?>
	
	<?php foreach ( $fields as $field ) : ?>
		<p><strong><?php echo wp_kses_post( $field['label'] ); ?>:</strong> <span class="text"><?php echo wp_kses_post( $field['value'] ); ?></span></p>
	<?php endforeach; ?>
<?php endif; ?>
