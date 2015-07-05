<?php
/**
 * This is the default template part for the
 * cancel element in the super-widget-registration template
 * part.
 *
 * @since 1.1.0
 * @version 1.1.0
 * @package IT_Exchange
 *
 * WARNING: Do not edit this file directly. To use
 * this template in a theme, copy over this file
 * to the exchange/super-widget-registration/elements/
 * directory located in your theme.
*/
?>

<?php do_action( 'it_exchange_super_widget_registration_before_login_elements' ); ?>
<div class="cancel_url">
    <a href="" class="it-exchange-sw-cancel-register-link it-exchange-button"><input type="button" value="<?php esc_attr_e( __( 'Log in', 'it-l10n-ithemes-exchange' ) ); ?>" /></a>
</div>
<?php do_action( 'it_exchange_super_widget_registration_after_login_elements' ); ?>
