<?php
if (!defined('BASEPATH')) 
    exit('No direct script access allowed');

class Product extends CI_Controller {

    function __construct(){
        parent::__construct();

        $this->load->model("Wardrobe_model");
        $this->load->model("Category_model");
        $this->load->model("Custom_Product_model");

        if(!$this->session->has_userdata("cart")){
            $this->session->set_userdata("cart",array());
        }
    }
    public function index() {
        $products = $this->Custom_Product_model->get_all();

        $this->page_data = array(
            "products" => $products
        );
        $this->load->view("admin/header",$this->page_data);
        $this->load->view("admin/product/all");
        $this->load->view("admin/footer");
    }
    
    public function details($product_id) {
    
        $where = array(
            'custom_product_id' => $product_id
        );

        $product = $this->Custom_Product_model->get_where($where);

        $this->page_data['products'] = $product[0];

        $this->page_data['images'] = $this->Custom_Product_model->get_images_where($where);

        $this->load->view('admin/header', $this->page_data);
        $this->load->view('admin/product/details');
        $this->load->view('admin/footer');
    }
    
    public function edit_details($custom_product_id) {
        $where = array(
            'custom_product_id' => $custom_product_id
        );

        $product = $this->Custom_Product_model->get_where($where);

        $this->page_data['product'] = $product[0];

        if ($_POST) {
            $input = $this->input->post();

            if (!empty($_FILES['banner']['name'])) {
                $config = array(
                    "allowed_types" => "gif|png|jpg|jpeg",
                    "upload_path" => "./images/product/custom/",
                    "path" => "/images/product/custom/");

                $this->load->library("upload", $config);
                if ($this->upload->do_upload("banner")) {
                    $thumbnail = $config['path'] . $this->upload->data()['file_name'];
                } else {
                    die(json_encode(array(
                        "status" => false,
                        "message" => $this->upload->display_errors()
                    )));
                }
            } else {
                $thumbnail = $product[0]['banner'];
            }

            $input['banner'] = $thumbnail;

            $this->Custom_Product_model->update($custom_product_id, $input);

            die(json_encode(array(
                "status" => true
            )));
        }

        $this->load->view('admin/header', $this->page_data);
        $this->load->view('admin/product/edit_details');
        $this->load->view('admin/footer');
    }

    public function edit_images($custom_product_id) {
        $where = array(
            'custom_product_id' => $custom_product_id
        );

        $this->page_data['images'] = $this->Custom_Product_model->get_images_where($where);

        $this->page_data['custom_product_id'] = $custom_product_id;

        if ($_FILES) {

            if (!empty($_FILES['images']['error'][0] != 4)) {
                if (!empty($_FILES['images']['name'])) { 
                    $files_count = count($_FILES["images"]['name']);

                    for ($i = 0; $i < $files_count; $i++) {
                        $_FILES['image']['name'] = $_FILES['images']['name'][$i];
                        $_FILES['image']['type'] = $_FILES['images']['type'][$i];
                        $_FILES['image']['tmp_name'] = $_FILES['images']['tmp_name'][$i];
                        $_FILES['image']['error'] = $_FILES['images']['error'][$i];
                        $_FILES['image']['size'] = $_FILES['images']['size'][$i];

                        $config = array(
                            "allowed_types" => "gif|png|jpg|jpeg",
                            "upload_path" => "./images/product/custom/",
                            "path" => "/images/product/custom/");

                        $this->load->library("upload", $config);

                        if ($this->upload->do_upload('image')) {
                            $url = $config['path'] . $this->upload->data()['file_name'];

                            $this->Custom_Product_model->add_image($url, $custom_product_id);
                        } else {
                            die(json_encode(array(
                                "status" => false,
                                "message" => $this->upload->display_errors()
                            )));
                        }
                    }
                }
            }


            die(json_encode(array(
                "status" => true
            )));
        }

        $this->load->view('admin/header', $this->page_data);
        $this->load->view('admin/product/edit_images');
        $this->load->view('admin/footer');
    }
    
    public function delete_image($custom_product_image_id) {

        $where = array(
            "custom_product_image_id" => $custom_product_image_id
        );


        $image = $this->Custom_Product_model->get_images_where($where);

        $custom_product_id = $image[0]['custom_product_id'];

        $this->Custom_Product_model->delete_image($where);

        redirect('product/edit_images/' . $custom_product_id, 'refresh');
    }
}