if ( is_checkout() && !empty( $wp->query_vars['order-received'] ) ) {
			$order_id_being = wc_get_order_id_by_order_key( $_GET['key'] );
			$order = wc_get_order( $order_id_being );
			$totoal_am = $order->get_total();
			print_r($totoal_am);
			?>