<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_all() {
        $this->db->select("user.*");
        $this->db->from("user");

        $query = $this->db->get();

        return $query->result_array();
    }

    public function get_where($where) {
        $this->db->select("user.*");
        $this->db->from("user");
        $this->db->where($where);

        $query = $this->db->get();

        return $query->result_array();
    }


    public function update_where($where, $data) {
        $this->db->where($where);
        $this->db->update("user", $data);
    }

}
