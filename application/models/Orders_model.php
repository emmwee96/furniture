<?php

class Orders_model extends Base_Model{

    function __construct()
    {
        parent::__construct();
    }

    function get_all(){
        $sql = "SELECT *, email as user,
        (SELECT status FROM order_status WHERE orders.status_id = order_status.order_status_id) as status 
        
        FROM orders 
        LEFT JOIN user on orders.user_id = user.user_id ORDER BY order_id desc";
        $orders = $this->db->query($sql)->result_array();

        return $orders;
    }

    function get_where($where){
        $this->db->select('*, (SELECT status FROM order_status WHERE orders.status_id = order_status.order_status_id) as status');
        $this->db->from("orders");
        $this->db->where($where);

        $query = $this->db->get();

        return $query->result_array();
    }

    function get_distinct_name_contact($where){
        $this->db->distinct("name, contact");
        $this->db->from("orders");
        $this->db->where($where);

        $query = $this->db->get();

        return $query->result_array();
    }

    function get($order_id){
        $sql = "SELECT *, email as user,
        (SELECT status FROM order_status WHERE orders.status_id = order_status.order_status_id) as status 
        
        FROM orders 
        LEFT JOIN user on orders.user_id = user.user_id 
        WHERE orders.order_id = ? ORDER BY order_id desc";

        $orders = $this->db->query($sql,array($order_id))->result_array();

        for($i = 0; $i < count($orders); $i++){
            $orders[$i]['details'] = $this->db->get_where("order_product",array(
                "order_id" => $orders[$i]['order_id']
            ))->result_array();
        }
        return $orders;
    }
}