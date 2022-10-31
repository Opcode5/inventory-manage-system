<?php

class Report_model extends CI_Model{

	public function sell_report($order_id){

		$q = $this->db->select('*')
				 ->from('orders')
				 ->where('order_id', $order_id)
				 ->join('customer', 'customer.customer_id=orders.customer_id')
				 ->get();
		return $q->result();

	}
}

?>