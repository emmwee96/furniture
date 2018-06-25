<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Orders extends Base_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->page_data = array();

        if (!$this->session->has_userdata("role_id")) {
         //   redirect("access/login", "refresh");
        }

        $this->load->model("Orders_model");
        $this->load->model("Email_model");
    }

    public function index()
    {

        $orders = $this->Orders_model->get_all();


        $this->page_data["orders"] = $orders;

        $this->load->view("admin/header", $this->page_data);
        $this->load->view("admin/Orders/all");
        $this->load->view("admin/footer");
    }



    public function details($order_id)
    {

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

    function updateStatus($order_id, $status)
    {
        $this->db->where("order_id", $order_id);
        $this->db->update("orders", array(
            "status_id" => $status
        ));

        redirect("Orders/details/" . $order_id, "refresh");
    }

    public function edit($order_id)
    {

        $orders = $this->Orders_model->get($order_id);

        $this->load->model("User_model");
        $user = $this->User_model->get_where($where = array(
            "user_id" => $orders[0]['user_id']
        ));

        $this->page_data["orders"] = $orders[0];
        $this->page_data['user'] = $user[0];

        $this->load->view("admin/header", $this->page_data);
        $this->load->view("admin/Orders/edit");
        $this->load->view("admin/footer");
    }

    public function delete($agent_id)
    {
        $this->Admin_model->update_where(array(
            "agent_id" => $agent_id
        ), array(
            "deleted" => 1
        ));

        redirect("agent", "refresh");
    }

    function send_quotation($order_id)
    {

        $orders = $this->Orders_model->get($order_id);

        $this->load->model("User_model");
        $user = $this->User_model->get_where($where = array(
            "user_id" => $orders[0]['user_id']
        ));

        $email_data["orders"] = $orders[0];
        $email_data['user'] = $user[0];

        $email_body = $this->build_email($email_data, "quotation");

        $this->Email_model->send_email($user[0]["email"], "Quotation Details", $email_body);

        $this->session->set_flashdata('quotation', 'sent');

        redirect("orders/details/" . $order_id, "refresh");
    }

}
