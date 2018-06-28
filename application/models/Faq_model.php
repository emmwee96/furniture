<?php

class Faq_model extends Base_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function get_all(){
        $this->db->select("*");
        $this->db->from("faq");
        $this->db->join("faq_category", "faq.faq_category_id = faq_category.faq_category_id", "left");
        $this->db->where("faq_category.deleted", 0);

        $query = $this->db->get();

        return $query->result_array();
    }

    function get_where($where){
        $this->db->select("*");
        $this->db->from("faq");
        $this->db->join("faq_category", "faq.faq_category_id = faq_category.faq_category_id", "left");
        $this->db->where($where);

        $query = $this->db->get();

        return $query->result_array();
    }

}

?>