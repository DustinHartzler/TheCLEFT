<?php
/**
 * This is the default template part for the
 * status in the transaction meta loop of the
 * transaction confirmation template part.
 *
 * @since 1.1.0
 * @version 1.1.0
 * @package IT_Exchange
 *
 * WARNING: Do not edit this file directly. To use
 * this template in a theme, simply copy over this
 * file's content to the exchange/content-confirmation/elements/
 * directory located in your theme.
*/
?>

<?php do_action( 'it_exchange_confirmation_before_transaction_status_element' ); ?>
<div class="it-exchange-transaction-status">
	<p><?php it_exchange( 'transaction', 'status' ); ?></p>
</div>
<?php do_action( 'it_exchange_confirmation_after_transaction_status_element' ); ?>