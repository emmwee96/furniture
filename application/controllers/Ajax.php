<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ajax extends Base_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->page_data = array();

        $this->load->model("Custom_Product_model");
        $this->load->model("Custom_product_options_model");
        $this->load->model("Custom_product_add_ons_model");
    }

    function loadProducts()
    {
        if ($_POST) {
            $input = $this->input->post();

            if (!empty($input["product_id"])) {
                $this->page_data['products'] = $this->Custom_Product_model->get_where_not_in($input["product_id"]);
            }

            $this->load->view("Ajax/load_product_modal", $this->page_data);
        } else {
            $this->page_data['products'] = $this->Custom_Product_model->get_all();

            $this->load->view("Ajax/load_product_modal", $this->page_data);

        }
    }

    function loadProductDetails()
    {
        if ($_POST) {
            $input = $this->input->post();

            $where = array(
                "custom_product_id" => $input["product_id"]
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

            $this->page_data["product"] = $product;

            $this->load->view("Ajax/edit_order_products", $this->page_data);
        }
    }

    function load_edit_option_content()
    {
        if ($_POST) {
            $input = $this->input->post();

            $where = array(
                "custom_product_fields_id" => $input["custom_product_field_id"]
            );

            $this->page_data["options"] = $this->Custom_product_options_model->get_where($where);
            $this->page_data["custom_product_field_id"] = $input["custom_product_field_id"];

            // $this->debug($this->page_data["options"]);

            $this->load->view("Ajax/edit_option_content", $this->page_data);
        } else {
            show_404();
        }
    }

    function load_edit_add_on_content()
    {
        if ($_POST) {
            $input = $this->input->post();

            $where = array(
                "custom_product_add_ons_id" => $input["custom_product_add_ons_id"]
            );

            $add_ons = $this->Custom_product_add_ons_model->get_where($where);
            $this->page_data["add_ons"] = $add_ons[0];
            $this->page_data["custom_product_add_ons_id"] = $input["custom_product_add_ons_id"];

            // $this->debug($this->page_data["add_ons"]);

            $this->load->view("Ajax/edit_add_on_content", $this->page_data);
        } else {
            show_404();
        }
    }
}
