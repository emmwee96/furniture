<?php 

class Custom_Product_model extends CI_Model{

    function get_where($where){
        $this->db->where($where);
        $products = $this->db->get("custom_product")->result_array();

        return $products;
    }
}