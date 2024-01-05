<?php
/**
 * Email Styles
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates/Emails
 * @version 3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Load our settings.
 */

// Background Styling
$back_bg_color = get_option( 'ec_vanilla_all_background_color' ); //"#f7f7f5";

// Email Sizing
$email_width = get_option( 'ec_vanilla_all_email_width' ); //700px

// Main Body Styling
$body_color				= get_option( 'ec_vanilla_all_text_color' );
$body_accent_color		= get_option( 'ec_vanilla_all_text_accent_color' ); //#988255
$body_text_color		= get_option( 'ec_vanilla_all_text_color' ); // "#3d3d3d";
$body_text_size 		= 14; //px
$body_letter_spacing	= 0.1; //em

// Not used - outlook doesn't like rgba, and bugs out.
$nav_rgba = wc_rgb_from_hex( $body_text_color );
$nav_rgba['A'] = '.8'; // add the alpha opacity.
$nav_rgba = 'rgba( ' . implode( ', ', $nav_rgba ) . ' )';

$heading_color 			= get_option( 'ec_vanilla_all_heading_color' );

$heading_1_size			= get_option( 'ec_vanilla_all_heading_1_size' ); //px

$body_a_color 			= $body_accent_color;
$body_a_decoration 		= "underline";
$body_a_style			= "none";

$body_important_a_color 	 = $body_accent_color;
$body_important_a_decoration  = "underline";
$body_important_a_style		 = "none";
$body_important_a_size		 = "17";
$body_important_a_weight	 = "bold";

$body_highlight_color		= $body_accent_color;
$body_highlight_decoration	= "none";
$body_highlight_style		= "none";

$order_items_table_text_color = get_option( 'ec_vanilla_all_order_items_table_text_color' );

// Footer Styling
$footer_a_color				= "#3C3C3C";
$footer_a_decoration		= "none";
$footer_a_style				= "none";


/**
 * Generate CSS.
 */

?>

/* GENERAL STYLES */
body { margin: 0; padding: 0; }
body, table, td, tr { color: <?php echo $body_text_color ?>; font-family: Arial, sans-serif; font-size: 16px; line-height: 1.5em; }
p { margin: 10px 0; padding: 0; }
ul { display: block; margin: 0; padding: 0; }
li { margin: 10px 0; padding: 0; }
h1, h2, h3, h4, h5, h6 { font-family: Arial, sans-serif; letter-spacing: -.5px; font-weight: bold; color: <?php echo $heading_color; ?>; text-align: center; margin: 0; padding: 0; }
h1 { font-size: 24px; line-height: 24px; margin: 24px 0; }
h2 { font-size: 24px; line-height: 24px; margin: 20px 0; }
h3 { font-size: 20px; line-height: 20px; margin: 18px 0; }
h4 { font-size: 18px; line-height: 18px; margin: 16px 0; }
h5 { font-size: 16px; line-height: 16px; margin: 14px 0; }
h6 { font-size: 14px; line-height: 14px; margin: 12px 0; }
img { border: 0; }
a { color: <?php echo $body_text_color ?>; font-style: <?php echo $body_a_style ?>; text-decoration: <?php echo $body_a_decoration ?>; }
	
/* BODY CONTENT */
.body_content { font-family: Arial, sans-serif; text-align: center; color: <?php echo $body_color ?>; margin: 0; padding: 40px 0; }
.body_content p { font-family: Arial, sans-serif; text-align: center; color: <?php echo $body_color ?>; margin: 10px 0; padding: 0; }

	/* GENERAL HEADING COLORS */
	.heading-color,
	.heading-color p,
	.heading-color p a,
	.heading-color p a.link { color: <?php echo $body_color; ?>; }

	/* MAIN/TOP HEADING */
	.top_heading { color: <?php echo $heading_color; ?>; font-family: Arial, sans-serif; font-size: <?php echo $heading_1_size ?>px; letter-spacing: -1px; line-height: <?php echo $heading_1_size; ?>px; font-weight: bold; margin: 0; padding: 1px 0; }
	.top_heading p { color: <?php echo $heading_color; ?>; }

.wrapper { font-family: Arial, sans-serif; font-size: <?php echo $body_text_size ?>px; color: <?php echo $body_text_color ?>; background-color: <?php echo esc_attr( $back_bg_color ) ?>; width:100%; -webkit-text-size-adjust:none !important; margin:0; padding: 0 0 50px 0; }
.wrapper-td { padding: 0 20px 20px; }

.main-body { font-family: Arial, sans-serif; text-align: center; overflow: hidden; width: <?php echo $email_width ?>px; }

.divider-line { background: <?php echo wc_hex_darker( $back_bg_color, 8 ); ?>; font-size: 0; height: 1px; line-height: 1px; }

.template_header { font-family: Arial, sans-serif; font-family:Arial; font-weight:bold; vertical-align:middle; padding: 20px 0; padding: 3% 0; }
.template_header a { font-weight: normal; text-decoration: none; font-size: 13px; margin: 0 0 0 12px; }

/* GENERAL HEADING, TEXT, LINKS */
.a_tag { color: <?php echo $body_text_color ?>; font-style: <?php echo $body_a_style ?>; text-decoration: <?php echo $body_a_decoration ?>; } /* a tags that are body colour with underline set in the global styles */
.a_tag_clean { color: <?php echo $body_text_color ?>; font-style: <?php echo $body_a_style ?>; text-decoration: none; } /* a tags that are body colour with no underline forced on */
.a_tag_color { color: <?php echo $body_a_color ?>; text-decoration: <?php echo $body_a_decoration ?>; font-style: <?php echo $body_a_style ?>; } /* a tags that are specific colour with underline set in the global styles */
.a_tag_color_clean { color: <?php echo $body_a_color ?>; font-style: <?php echo $body_a_style ?>; text-decoration: none; } /* a tags that are colour with no underline forced on */
.highlight { color: <?php echo $body_highlight_color ?>; text-decoration: <?php echo $body_highlight_decoration ?>; font-style: <?php echo $body_highlight_style ?>; }

/* ORDER TABLE */
.order-table-heading { background: #fdfdfd; }
.order-table-heading td { color: <?php echo $order_items_table_text_color; ?>; padding: 12px; font-weight: bold; }
.order-table-heading p { color: <?php echo $order_items_table_text_color; ?>; }
.order-table-heading .highlight { color: <?php echo $body_highlight_color ?>; text-decoration: <?php echo $body_highlight_decoration ?>; font-style: <?php echo $body_highlight_style ?>; }
.order-table-heading a { color: <?php echo $order_items_table_text_color; ?>; font-style: <?php echo $body_a_style ?>; text-decoration: none; }

/* PAYMENT GATEWAY OPTIONS */
.pay_link { font-size: <?php echo $body_important_a_size ?>px; font-weight: <?php echo $body_important_a_weight ?>; font-style: <?php echo $body_important_a_style ?>; color: <?php echo $body_important_a_color ?>; text-decoration: <?php echo $body_important_a_decoration ?>; }


/* ORDER ITEMS TABLE */
.order_items_table_holder { color: <?php echo $order_items_table_text_color; ?>; background: white; border-radius: 5px; border: 2px solid <?php echo wc_hex_darker( $back_bg_color, 10 ); ?> /*#e0e0e0*/; overflow: hidden; }
.order_items_table_holder td { color: <?php echo $order_items_table_text_color; ?>; }
.order_items_table_holder p { margin: 2px 0; }
.order_items_table_holder a { color: <?php echo $order_items_table_text_color; ?>; }
.order_items_table_holder ul { 	display: block; margin: 0; padding: 0; }
.order_items_table_holder ul li { list-style: none; margin: 0; padding: 0 0 3px; }

	/* MAIN TABLE */
	.order_items_table { margin: 0; overflow: hidden; width: 100%; }
	
	/* TD GENERAL */
	.order_items_table_td { color: <?php echo $order_items_table_text_color; ?>; padding: 15px 30px; border-top: 1px solid #f7f7f7; font-family: Arial, sans-serif; text-align:left; vertical-align: top; font-size: 14px; }
	
	/* TH GENERAL */
	.order_items_table_th,
	.order_items_table > table > thead > tr > th { font-family: Arial, sans-serif; text-align: left; text-transform: uppercase; font-size: 10px; font-weight: normal; padding-top: 12px; padding-bottom: 12px; margin:0; line-height: .8em; }
	
	/* PRODUCT */
	.order_items_table_td_product { padding-top: 25px; padding-bottom: 25px; }
	
		/* DETAILS */
		.order_items_table_td_product_details { text-align: left; padding-top: 20px; padding-bottom: 25px; font-weight: normal; line-height: 20px; }

			/* DETAILS INNER */
			.order_items_table_product_details_inner {  }
			.order_items_table_product_details_inner a { color: #9e9e9e; }
			.order_items_table_product_details_inner td { color: #9e9e9e; font-size: 13px; vertical-align: top; }
			.order_items_table_product_details_inner td.order_items_table_product_details_inner_td_image { padding-right: 18px; }
			.order_items_table_product_details_inner td.order_items_table_product_details_inner_td_text {  }
			.order_items_table_product_details_inner td.order_items_table_product_details_inner_td_text strong { font-weight: normal; }
			.order_items_table_product_details_inner img { border-radius: 3px; padding: 0; margin: 0; }
			.order_items_table_product_details_inner .order_items_table_product_details_inner_title { font-weight: bold; font-size: 16px; color: <?php echo $order_items_table_text_color; ?>; padding-bottom: 6px; }
			.order_items_table_product_details_inner small {  }
		
		/* QUANTITY */
		.order_items_table_td.order_items_table_td_product_quantity { color: <?php echo $order_items_table_text_color; ?>; font-weight: bold; padding-left: 0; padding-right: 0; }
		
		/* TOTAL */
		.order_items_table_td_product_total { font-weight: normal; }
		.order_items_table_td_product_total .amount { color: <?php echo $order_items_table_text_color; ?>; font-weight: bold; }
		.order_items_table_td_product_total small { white-space: nowrap; word-wrap: normal; }

	/* TOTALS */
	.order_items_table_totals_td { width: 50%; background: #fdfdfd; font-family: Arial, sans-serif; text-align: left; font-size: 14px; line-height: 1em; }
		
		/* TOTALS LEFT COLUMN */
		th.order_items_table_totals_td { text-align: right; padding-right: 12px; }
		
		/* TOTALS RIGHT COLUMN */
		td.order_items_table_totals_td { text-align: left; padding-left: 12px; }
	
	/* NOTE */
	.order_items_table_totals_td.order_items_table_note { text-align: center; width: 100%; line-height: 1.5em; padding: 22px 40px; padding-left: 40px; padding-right: 40px; font-size: 16px; }
	
	/* DOWNLOADS */
	.wc-item-downloads a { font-style: italic; color: <?php echo $body_highlight_color ?>; }


/* ORDER OTHER TABLES */
.order_other_table_holder > table { color: <?php echo $order_items_table_text_color; ?>; background: white; border-radius: 5px; border: 2px solid <?php echo wc_hex_darker( $back_bg_color, 10 ); ?> /*#e0e0e0*/; overflow: hidden; }
.order_other_table_holder > table a {}
.order_items_table_holder > table ul { 	display: block; margin: 0; padding: 0; }
.order_items_table_holder > table ul li { list-style: none; margin: 0; padding: 0 0 3px; }
.order_other_table_holder > table table { color: <?php echo $order_items_table_text_color; ?>; }

	/* ORDER ITEMS */
	.order_other_table_holder > table th,
	.order_other_table_holder > table td { color: <?php echo $order_items_table_text_color; ?>; padding: 20px 30px; border: 0; border-top: 1px solid #f7f7f7; font-family: Arial, sans-serif; text-align:left; vertical-align: top; font-size: 14px; }
	.order_other_table_holder > table th { border-top: 0; background: #fdfdfd; padding: 12px 30px; }
	.order_other_table_holder > table > thead > tr > th,
	.order_other_table_holder > table > tr > th { font-family: Arial, sans-serif; text-align: left; text-transform: uppercase; font-size: 10px; font-weight: normal; padding-top: 12px; padding-bottom: 12px; margin:0; line-height: .8em; }
	.order_other_table_holder > table a { color: <?php echo $order_items_table_text_color; ?>; }

/* ORDER OTHER TABLES - WC DOWNLOADS */
.order_other_table_holder_downloads > table td:first-child { font-weight: bold; }
.order_other_table_holder_downloads > table td:first-child a { text-decoration: none; }
.order_other_table_holder_downloads > table td:last-child a { font-style: italic; color: <?php echo $body_highlight_color ?>; }


/* ADDRESSES */
#addresses {}
#addresses address { font-style: normal; text-align: center; }
#addresses address p { margin: 0; }

/* NAVIGATION BAR */
.nav_holder {}
.top_nav { }
.top_nav tr td { height: 38px; font-size: 14px; }
.top_nav tr td.nav-text-block { padding: 11px 12px;  }
.top_nav tr td.nav-text-block-with-image { padding-left: 0px; }
.top_nav tr td.nav-image-block { padding: 8px 6px; }
.top_nav tr td.nav-spacer-block { padding: 8px 6px; }
.top_nav a { font-weight: bold; color: <?php echo $body_text_color; ?>; text-decoration: none; }

/* FOOTER */
.footer-text-block { font-family: Arial,sans-serif; font-size: 12px; text-align: center; }
.footer-text-block-td { font-family: Arial,sans-serif; font-size: 12px; padding: 15px 0 0; }
.footer-logo-block { font-family: Arial,sans-serif; font-size: 12px; text-align: center; }
.footer-logo-block-td { font-family: Arial,sans-serif; font-size: 12px; padding: 9px 0 0; }
.footer_a_tag { color: <?php echo $footer_a_color ?>; text-decoration: <?php echo $footer_a_decoration ?>; }

/* CUSTOM CSS */
<?php echo wp_strip_all_tags( get_option( 'ec_vanilla_all_custom_css' ) ); ?>

/* RESPONSIVE */
@media screen and ( max-width: <?php echo $email_width + 60 ?>px ) {
	
	.main-body { width: 100% !important; }
	.nav-text-block { padding-left: 6px !important; padding-right: 6px !important; }
}
@media screen and ( max-width: 640px ) {
	
	.addresses-td { display: block; width: 100%; }
}
@media screen and ( max-width: 500px ) {
	
	.order_items_table_product_details_inner_td_image { display: none !important; }
}

/* ADMIN STYLES */
.testing-block { padding:8px 10px; color: rgb(59, 59, 59); box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.07) inset; font-family: sans-serif; font-size:11px; margin: 0 auto 4px; text-shadow: 0 0px 3px rgba(255, 255, 255, 0.54); display: inline-block; }
.state-guide { font-size: 10px; color: #AEAEAE; margin: 0; padding: 6px 0; text-transform: uppercase; }
.shortcode-error { color: #FFF; font-size: 12px; background-color: #545454; border-radius: 3px; padding: 2px 6px 1px; }
