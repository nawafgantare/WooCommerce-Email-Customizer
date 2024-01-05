<?php
/**
 * Customer new account email
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates/Emails
 * @version 3.7.0
 */

defined( 'ABSPATH' ) || exit;

$email_heading = get_option( 'ec_woocommerce_customer_new_account_heading' );
?>

<?php do_action( 'woocommerce_email_header', $email_heading, $email ); ?>

<?php echo get_option( 'ec_woocommerce_customer_new_account_main_text' ); ?>
				
<?php if ( ( 'yes' === get_option( 'woocommerce_registration_generate_password' ) && $password_generated ) || isset( $_REQUEST['ec_render_email'] ) ) : ?>
	
	<?php echo get_option( 'ec_woocommerce_customer_new_account_main_text_generate_pass' ); ?>
	
<?php endif; ?>

<?php
/**
 * Show user-defined additonal content - this is set in each email's settings.
 */
if ( isset( $additional_content ) && $additional_content ) {
	echo wp_kses_post( wpautop( wptexturize( $additional_content ) ) );
}
?>

<?php do_action( 'woocommerce_email_footer', $email ); ?>
