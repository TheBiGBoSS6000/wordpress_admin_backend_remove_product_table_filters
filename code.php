<?php
/* ------------------------ _____product_remove_table_filters */
if ( ! function_exists('_____product_remove_table_filters') ) {

	function _____product_remove_table_filters($filters) {
		return array();
	}

	add_filter('woocommerce_products_admin_list_table_filters', '_____product_remove_table_filters', 500, 1);
}
