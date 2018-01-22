<?php

class Category_model extends CI_Model{
    function get_all(){
        $result = $this->db->get("category")->result_array();
        return $result;
    }
}