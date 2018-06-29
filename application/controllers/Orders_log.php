<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Orders_log extends Base_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->page_data = array();

        if (!$this->session->has_userdata("login_data")) {
            redirect("access/login", "refresh");
        }

        $this->load->model("Orders_model");
        $this->load->model("Orders_log_model");
        $this->load->model("Order_product_log_model");
        $this->load->model("Custom_Product_model");
        $this->load->model("Order_product_model");
        $this->load->model("Custom_product_fields_model");
        $this->load->model("Custom_product_options_model");
        $this->load->model("Custom_product_add_ons_model");
        $this->load->model("Order_product_model");
        $this->load->model("Email_model");
    }

    public function index()
    {

        $orders = $this->Orders_log_model->get_all();


        $this->page_data["orders"] = $orders;

        $this->load->view("admin/header", $this->page_data);
        $this->load->view("admin/Orders_log/all");
        $this->load->view("admin/footer");
    }

    public function details($order_log_id)
    {

        $orders = $this->Orders_log_model->get($order_log_id);

        $this->load->model("User_model");
        $user = $this->User_model->get_where($where = array(
            "user_id" => $orders[0]['user_id']
        ));

        $this->page_data["orders"] = $orders[0];
        $this->page_data['user'] = $user[0];

        $this->load->view("admin/header", $this->page_data);
        $this->load->view("admin/Orders_log/details");
        $this->load->view("admin/footer");
    }

    function updateStatus($order_id, $status)
    {
        $this->db->where("order_id", $order_id);
        $this->db->update("orders", array(
            "status_id" => $status
        ));
        $this->add_to_log($order_id);

        redirect("Orders/details/" . $order_id, "refresh");
    }

    public function edit($order_id)
    {

        $orders = $this->Orders_model->get($order_id);

        $this->load->model("User_model");
        $user = $this->User_model->get_where($where = array(
            "user_id" => $orders[0]['user_id']
        ));

        $i = 0;
        foreach ($orders[0]["details"] as $row) {
            $orders[0]["details"][$i]["labels"] = $this->Custom_Product_model->get_labels($row['product_id']);
            $orders[0]["details"][$i]["add_ons"] = $this->Custom_Product_model->get_add_ons($row['product_id']);
            $orders[0]["details"][$i]["options"] = json_decode($row["options"], true);
            $i++;
        }
        // $this->debug($orders[0]["details"][1]["options"]);

        $this->page_data["order"] = $orders[0];
        $this->page_data['user'] = $user[0];
        $products = $this->Custom_Product_model->get_all();

        $i = 0;
        foreach ($products as $row) {
            // $products[$i]["labels"] = $this->Custom_Product_model->get_labels($row['custom_product_id']);
            // $products[$i]["add_ons"] = $this->Custom_Product_model->get_add_ons($row['custom_product_id']);
            // $products[$i]["images"] = $this->Custom_Product_model->get_images($row['custom_product_id']);
            $products[$i]["product_id"] = $row["custom_product_id"];
            $i++;
        }

        $this->page_data["products"] = $products;

        if ($_POST) {
            $this->add_to_log($order_id);

            $input = $this->input->post();

            $where = array(
                "order_id" => $order_id
            );

            $data = array(
                "address1" => $input["address1"],
                "address2" => $input["address2"],
                "city" => $input["city"],
                "state" => $input["state"],
                "postcode" => $input["postcode"],
                "status_id" => 1
            );

            $this->Orders_model->update_where($where, $data);

            $this->Order_product_model->hard_delete_where($where);

            foreach ($input["product_id"] as $product_id) {
                $where = array(
                    "custom_product_id" => $product_id
                );

                $product = $this->Custom_Product_model->get_where($where);

                $i = 0;
                foreach ($product as $row) {
                    $product[$i]["labels"] = $this->Custom_Product_model->get_labels($row['custom_product_id']);
                    $product[$i]["add_ons"] = $this->Custom_Product_model->get_add_ons($row['custom_product_id']);
                    $product[$i]["images"] = $this->Custom_Product_model->get_images($row['custom_product_id']);
                    $product[$i]["product_id"] = $row["custom_product_id"];
                    $i++;
                }

                $options = array();
                foreach ($product[0]['labels'] as $row) {
                    if ($input[$row['label_id'] . "_" . $product_id] != "") {
                        $where = array(
                            "label_id" => $row['label_id'],
                            "custom_product_id" => $product_id,
                        );

                        $custom_product_fields = $this->Custom_product_fields_model->get_where($where);

                        $where = array(
                            "custom_product_fields_id" => $custom_product_fields[0]["custom_product_field_id"],
                            "custom_product_options_id" => $input[$row['label_id'] . "_" . $product_id]
                        );

                        $custom_product_options = $this->Custom_product_options_model->get_where($where);

                        $options[$custom_product_fields[0]["label_id"]] = array(
                            "name" => $custom_product_fields[0]["label"],
                            "label" => $custom_product_options[0]["label"],
                            "type" => "option",
                            "row" => $custom_product_options[0]
                        );
                    }
                }

                foreach ($product[0]['add_ons'] as $row) {
                    if (!empty($input[$row['label_id'] . "_" . $product_id])) {
                        if ($input[$row['label_id'] . "_" . $product_id] == "CHECKED") {
                            $where = array(
                                "label_id" => $row['label_id'],
                                "custom_product_id" => $product_id,
                            );

                            $custom_product_add_ons = $this->Custom_product_add_ons_model->get_where($where);

                            $options[$custom_product_add_ons[0]["label_id"]] = array(
                                "name" => $custom_product_add_ons[0]["label"],
                                "label" => $custom_product_add_ons[0]["label"],
                                "type" => "checkbox",
                                "row" => array(
                                    "label" => $custom_product_add_ons[0]["label"],
                                    "value" => $custom_product_add_ons[0]["value"]
                                )
                            );
                        }
                    }
                }

                $data = array(
                    "product_id" => $product[0]["custom_product_id"],
                    "order_id" => $order_id,
                    "total" => $input["price_" . $product_id],
                    "height" => $input["height_" . $product_id],
                    "width" => $input["width_" . $product_id],
                    "name" => $product[0]['name'],
                    "options" => json_encode($options)
                );

                $this->Order_product_model->insert($data);
            }

            redirect("orders/details/" . $order_id, "refresh");
        }

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

    function add_admin_remarks($order_id)
    {
        if ($_POST) {
            $this->add_to_log($order_id);

            $input = $this->input->post();

            $where = array(
                "order_id" => $order_id
            );

            $data = array(
                "admin_remarks" => $input["admin_remarks"]
            );

            $this->Orders_model->update_where($where, $data);

            redirect("orders/details/" . $order_id, "refresh");
        } else {
            show_404();
        }
    }

    function add_to_log($order_id){
        $orders = $this->Orders_model->get($order_id);

        $this->load->model("User_model");
        $user = $this->User_model->get_where($where = array(
            "user_id" => $orders[0]['user_id']
        ));

        $i = 0;
        foreach ($orders[0]["details"] as $row) {
            $orders[0]["details"][$i]["labels"] = $this->Custom_Product_model->get_labels($row['product_id']);
            $orders[0]["details"][$i]["add_ons"] = $this->Custom_Product_model->get_add_ons($row['product_id']);
            $orders[0]["details"][$i]["options"] = json_decode($row["options"], true);
            $i++;
        }
        // $this->debug($orders[0]["details"][1]["options"]);

        $this->page_data["order"] = $orders[0];
        $this->page_data['user'] = $user[0];
        $products = $this->Custom_Product_model->get_all();

        $i = 0;
        foreach ($products as $row) {
            // $products[$i]["labels"] = $this->Custom_Product_model->get_labels($row['custom_product_id']);
            // $products[$i]["add_ons"] = $this->Custom_Product_model->get_add_ons($row['custom_product_id']);
            // $products[$i]["images"] = $this->Custom_Product_model->get_images($row['custom_product_id']);
            $products[$i]["product_id"] = $row["custom_product_id"];
            $i++;
        }

        $this->page_data["products"] = $products;
        
        $data = array(
            "order_id" => $order_id,
            "user_id" => $orders[0]["user_id"],
            "contact" => $orders[0]["contact"],
            "name" => $orders[0]["name"],
            "address1" => $orders[0]["address1"],
            "address2" => $orders[0]["address2"],
            "postcode" => $orders[0]["postcode"],
            "state" => $orders[0]["state"],
            "total" => $orders[0]["total"],
            "status_id" => $orders[0]["status_id"],
            "city" => $orders[0]["city"],
            "remarks" => $orders[0]["remarks"],
            "admin_remarks" => $orders[0]["admin_remarks"],
            "promo_code" => $orders[0]["promo_code"],
            "modified_by" => $this->session->userdata("login_id")
        );

        $order_log_id = $this->Orders_log_model->insert($data);

        foreach($orders[0]["details"] as $row){

            $data = array(
                "order_log_id" => $order_log_id,
                "total" => $row["total"],
                "options" => json_encode($row["options"]),
                "product_id" => $row["product_id"],
                "name" => $row["name"],
                "height" => $row["height"],
                "width" => $row["width"]
            );

            $this->Order_product_log_model->insert($data);

        }
    }

}
