<?php

class Orders_log_model extends Base_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function get_all(){
        $sql = "SELECT *, email as user,
        (SELECT status FROM order_status WHERE orders_log.status_id = order_status.order_status_id) as status,
        (SELECT username FROM admin WHERE orders_log.modified_by = admin.admin_id) as modified_user 
        FROM orders_log 
        LEFT JOIN user on orders_log.user_id = user.user_id";
        $orders = $this->db->query($sql)->result_array();

        return $orders;
    }

    function get($order_log_id){
        $sql = "SELECT *, email as user,
        (SELECT status FROM order_status WHERE orders_log.status_id = order_status.order_status_id) as status,
        (SELECT username FROM admin WHERE orders_log.modified_by = admin.admin_id) as modified_user 
        
        FROM orders_log 
        LEFT JOIN user on orders_log.user_id = user.user_id 
        WHERE orders_log.order_log_id = ? ORDER BY order_log_id desc";

        $orders = $this->db->query($sql,array($order_log_id))->result_array();

        for($i = 0; $i < count($orders); $i++){
            $orders[$i]['details'] = $this->db->get_where("order_product_log",array(
                "order_log_id" => $orders[$i]['order_log_id']
            ))->result_array();
        }
        return $orders;
    }

}

?>