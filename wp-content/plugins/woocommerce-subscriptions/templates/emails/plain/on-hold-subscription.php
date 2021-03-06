<?php
/**
 * Cancelled Subscription email (plain text)
 *
 * @author	Prospress
 * @package WooCommerce_Subscriptions/Templates/Emails/Plain
 * @version 2.1
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

echo $email_heading . "\n\n";

// translators: $1: customer's billing first name and last name
printf( __( 'A subscription belonging to %1$s has been suspended by the user. Their subscription\'s details are as follows:', 'woocommerce-subscriptions' ), $subscription->get_formatted_billing_full_name() );

echo "\n\n=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=\n";

/**
 * @hooked WC_Subscriptions_Email::order_details() Shows the order details table.
 * @since 2.1.0
 */
do_action( 'woocommerce_subscriptions_email_order_details', $subscription, $sent_to_admin, $plain_text, $email );

echo "\n----------\n\n";

$last_payment_time = $subscription->get_time( 'last_payment', 'site' );

if ( ! empty( $last_payment_time ) ) {
	// translators: placeholder is last time subscription was paid
	echo sprintf( __( 'Last Payment: %s', 'woocommerce-subscriptions' ), date_i18n( wc_date_format(), $last_payment_time ) ) . "\n";
}

// translators: placeholder is localised date string
echo sprintf( __( 'Date Suspended: %s', 'woocommerce-subscriptions' ), date_i18n( wc_date_format(), time() ) ) . "\n";

do_action( 'woocommerce_email_order_meta', $subscription, $sent_to_admin, $plain_text, $email );

echo "\n" . sprintf( _x( 'View Subscription: %s', 'in plain emails for subscription information', 'woocommerce-subscriptions' ), wcs_get_edit_post_link( $subscription->id ) ) . "\n";

echo "\n=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=\n\n";

do_action( 'woocommerce_email_customer_details', $subscription, $sent_to_admin, $plain_text, $email );

echo "\n=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=\n\n";

echo apply_filters( 'woocommerce_email_footer_text', get_option( 'woocommerce_email_footer_text' ) );
