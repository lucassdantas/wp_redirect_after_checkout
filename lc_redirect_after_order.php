<?php
/**
* Plugin Name: Redireciona após a o checkout concluído
* Plugin URI: https://github.com/lucassdantas/wp_redirect_after_checkout
* Description: O usuário será redirecionado para o whatsApp após concluir um pedido
* Version: 1.0.0
* Author: R&D Marketing Digital
* Author URI: https://rdmarketing.com.br/
**/

add_action( 'woocommerce_thankyou', 'lc_redirect_after_checkout');
function lc_redirect_after_checkout( $order_id ){
 	if (class_exists('WooCommerce')) {
        $whatsapp_link = 'https://api.whatsapp.com/send/?phone=5521982095019&text=Ol%C3%A1+Tran%C3%A7arte%21&type=phone_number&app_absent=0';
        wp_redirect($whatsapp_link);
        exit;
    }
}