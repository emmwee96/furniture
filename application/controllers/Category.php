<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Category extends  Base_Controller{

    public function __construct() {
        parent::__construct();
        $this->load->model("Category_model");
        $this->page_data = array();
    }

    public function index() {

        $this->page_data['category'] = $this->Category_model->get_all();
        
        $this->load->view('admin/header', $this->page_data);
        $this->load->view('admin/category/all');
        $this->load->view('admin/footer');
    }

    public function edit($category_id) {
        $where = array(
            "category_id" => $category_id,
        );

        $category = $this->Category_model->get_where($where);
        
        $this->page_data['category'] = $category[0];
        
        if ($_POST) {
            $input = $this->input->post();

            if (!empty($_FILES['images']['name'])) {
                $config = array(
                    "allowed_types" => "gif|png|jpg|jpeg",
                    "upload_path" => "./images/category/",
                    "path" => "/images/category/");

                $this->load->library("upload", $config);
                if ($this->upload->do_upload("images")) {
                    $url = $config['path'] . $this->upload->data()['file_name'];
                } else {
                    die(json_encode(array(
                        "status" => false,
                        "message" => $this->upload->display_errors()
                    )));
                }
            } else {
                $url = $category[0]['image'];
            }

            $input['image'] = $url;

            $this->Category_model->update($category_id, $input);

            die(json_encode(array(
                "status" => true
            )));
        }

        $this->load->view('admin/header', $this->page_data);
        $this->load->view('admin/category/edit');
        $this->load->view('admin/footer');
    }
}
