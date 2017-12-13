<?php

// Zerar preço do PAC quando compra receber frete gratuito (Por produto ou Total da Compra)
function custom_woocommerce_correios_shipping_methods( $rate ) {

	$free = false;

	// Loop que vai procurar por cada produto no carrinho
	foreach ( WC()->cart->get_cart() as $cart_item_key => $values ) {

		// Buscando as classes de entrega deste produto
		$shipping_class = get_the_terms( $values['product_id'], 'product_shipping_class' );

		// Caso tenha a classe reduzo o custo do PAC para 0
		if($shipping_class[0]->slug == 'free-shipping'){
			$free = true;
		}

	}
	
	// Caso o produto custe mais de 199 o frete será gratuito
	if ( ( WC()->cart->subtotal >= 199 ) || ( $free == true ) ) {
		$rate['cost'] = 0;
		$rate['label'] = 'Frete Grátis - ' . $rate['label'];
	}

	// Retorno o valor do PAC
	return $rate;
}
add_filter( 'woocommerce_correios_correios-pac_rate', 'custom_woocommerce_correios_shipping_methods' );

?>
