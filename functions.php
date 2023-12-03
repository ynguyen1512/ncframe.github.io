<?php
// Add custom Theme Functions here
// 
// đổi tên nút add to cart trên danh mục sản phẩm và trang sản phẩm
add_filter( 'woocommerce_product_single_add_to_cart_text', 'sm_woo_custom_cart_button_text' );
add_filter( 'woocommerce_product_add_to_cart_text', 'sm_woo_custom_cart_button_text' );

function sm_woo_custom_cart_button_text(){
	return __( 'Mua hàng tại Shopee', 'woocommerce');
}



function my_custom_translations( $strings ) {
	$text = array('Quick View' => 'Xem nhanh');
	$strings = str_ireplace( array_keys( $text ), $text, $strings );
	return $strings;
}
add_filter( 'gettext', 'my_custom_translations', 20 );

