<?php
/**
* Plugin Name: Redireciona após a o checkout concluído
* Plugin URI: https://github.com/lucassdantas/wp_redirect_after_checkout
* Description: Plugin to sent email before show calculation result
* Version: 1.0.0
* Author: R&D Marketing Digital
* Author URI: https://rdmarketing.com.br/
**/

add_action( 'woocommerce_thankyou', 'websensepro_redirectcustom');
function websensepro_redirectcustom( $order_id ){
    $order = wc_get_order( $order_id );
    $url = 'https://api.whatsapp.com/send/?phone=5521982095019&text=Ol%C3%A1+Tran%C3%A7arte%21&type=phone_number&app_absent=0';
    if ( ! $order->has_status( 'failed' ) ) {
        wp_safe_redirect( $url );
        exit;
    }
}