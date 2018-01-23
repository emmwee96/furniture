<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Orders extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->page_data = array();

        if (!$this->session->has_userdata("role_id")) {
         //   redirect("access/login", "refresh");
        }

        $this->load->model("Orders_model");
    }

    public function index() {

        $orders = $this->Orders_model->get_all();

       
        $this->page_data["orders"] = $orders;

        $this->load->view("admin/header", $this->page_data);
        $this->load->view("admin/Orders/all");
        $this->load->view("admin/footer");
    }

   

    public function details($order_id) {

        $orders = $this->Orders_model->get($order_id);
      
        $this->load->model("User_model");
        $user = $this->User_model->get_where($where = array(
            "user_id" => $orders[0]['user_id']
        ));
        
        $this->page_data["orders"] = $orders[0];
        $this->page_data['user'] = $user[0];

        $this->load->view("admin/header", $this->page_data);
        $this->load->view("admin/Orders/details");
        $this->load->view("admin/footer");
    }

    function updateStatus($order_id,$status){
        $this->db->where("order_id",$order_id);
        $this->db->update("orders",array(
            "status_id" => $status
        ));

        redirect("Orders/details/".$order_id,"refresh");
    }

    public function edit($agent_id) {

        if ($_POST) {
            $input = $this->input->post();

            $error = false;

            if ($input["password"] OR $input["password2"]) {
                if ($input["password"] == $input["password2"]) {
                    $hash = $this->hast($input["password"]);
                } else {
                    $error = true;
                    $error_message = "Passwords do not match";
                }
            }

            if (!$error) {
                $where = array(
                    "agent_id" => $agent_id
                );

                if (!$input["referrer_id"]) {
                    $input["referrer_id"] = 0;
                }

                $input["commission_rate"] = $input["commission_rate"] / 100;

                $data = array(
                    "username" => $input["username"],
                    "name" => $input["name"],
                    "email" => $input["email"],
                    "contact" => $input["contact"],
                    "referrer_id" => $input["referrer_id"],
                    "commission_rate" => $input["commission_rate"],
                    "gender" => $input["gender"],
                );

                if (isset($hash)) {
                    $data["password"] = $hash["password"];
                    $data["salt"] = $hash["salt"];
                }

                $this->Agent_model->update_where($where, $data);

                die(json_encode(array(
                    "status" => true
                )));
            } else {
                die(json_encode(array(
                    "status" => false,
                    "message" => $error_message
                )));
            }
        }

        $agent = $this->Agent_model->get_where($where = array(
            "agent_id" => $agent_id
        ));
        
        $agent[0]["commission_rate"] = $agent[0]["commission_rate"] * 100;

        $this->page_data["agent"] = $agent[0];
        $agents = $this->Agent_model->get_all_expect($agent_id);

        $this->load->view("admin/header", $this->page_data);
        $this->load->view("admin/Agent/edit");
        $this->load->view("admin/footer");
    }

    public function delete($agent_id) {
        $this->Admin_model->update_where(array(
            "agent_id" => $agent_id
                ), array(
            "deleted" => 1
        ));

        redirect("agent", "refresh");
    }

}
