<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends Base_Controller{

    public function __construct() {
        parent::__construct();

        $this->page_data = array();
        
        if (!$this->session->has_userdata("login_data")) {
            redirect("access/login", "refresh");
        }

        $this->load->model("User_model");
        $this->load->model("Orders_model");
    }

    public function index() {

        $users = $this->User_model->get_all();

        $i = 0;
        foreach($users as $row){

            $where = array(
                "user_id" => $row["user_id"]
            );

            $users[$i]["contact_details"] = $this->Orders_model->get_distinct_name_contact($where);

            $i++;
        }

        $this->page_data["users"] = $users;

        $this->load->view("admin/header", $this->page_data);
        $this->load->view("admin/User/all");
        $this->load->view("admin/footer");
    }

    public function add() {

        if ($_POST) {
            $input = $this->input->post();

            $error = false;

            if ($input["password"] == $input["password2"]) {
                $hash = $this->hash($input["password"]);
            } else {
                $error = true;
                $error_message = "Passwords do not match";
            }

            if (!$error) {
                if (!$input["referrer_id"]) {
                    $input["referrer_id"] = 0;
                }

                $input["commission_rate"] = $input["commission_rate"] / 100;

                $data = array(
                    "username" => $input["username"],
                    "password" => $hash["password"],
                    "name" => $input["name"],
                    "email" => $input["email"],
                    "contact" => $input["contact"],
                    "salt" => $hash["salt"],
                    "referrer_id" => $input["referrer_id"],
                    "commission_rate" => $input["commission_rate"],
                    "gender" => $input["gender"],
                );

                $this->Agent_model->add($data);

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

        $this->page_data["agents"] = $this->Agent_model->get_all();

        $this->load->view("admin/header", $this->page_data);
        $this->load->view("admin/Agent/add");
        $this->load->view("admin/footer");
    }

    public function details($user_id) {

        $user = $this->User_model->get_where($where = array(
            "user_id" => $user_id
        ));
      

        $this->page_data["orders"] = $this->Orders_model->get_where(array(
            "user_id" => $user_id
        ));
        
        $this->page_data["user"] = $user[0];

        $this->load->view("admin/header", $this->page_data);
        $this->load->view("admin/User/details");
        $this->load->view("admin/footer");
    }

    public function edit($user_id) {

        $where = array(
            "user_id" => $user_id
        );

        $user = $this->User_model->get_where($where);

        $this->show_404_if_empty($user);

        $this->page_data["user"] = $user[0];

        if($_POST){
            $input = $this->input->post();

            $where = array(
                "user_id" => $user_id
            );

            $data = array(
                "name" => $input["name"],
                "email" => $input["email"],
                "contact" => $input["contact"]
            );

            $this->User_model->update_where($where, $data);

            redirect("user/details/" . $user_id, "refresh");
        }

        $this->load->view("admin/header", $this->page_data);
        $this->load->view("admin/User/edit");
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
