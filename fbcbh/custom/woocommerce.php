<?php 
/* woocommerce customizations 
*/
// to remove sku from everywhere....
add_filter( 'wc_product_sku_enabled', '__return_false' );

?>