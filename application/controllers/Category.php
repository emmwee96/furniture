<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Category extends CI_Controller {

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

    public function add() {

        if ($_POST) {

            $input = $this->input->post();

            if (!empty($_FILES['images']['name'])) {

                for ($i = 0; $i < count($_FILES["images"]['name']); $i++) {
                    $_FILES['image']['name'] = $_FILES['images']['name'][$i];
                    $_FILES['image']['type'] = $_FILES['images']['type'][$i];
                    $_FILES['image']['tmp_name'] = $_FILES['images']['tmp_name'][$i];
                    $_FILES['image']['error'] = $_FILES['images']['error'][$i];
                    $_FILES['image']['size'] = $_FILES['images']['size'][$i];

                    $config = array(
                        "allowed_types" => "gif|png|jpg|jpeg",
                        "upload_path" => "./images/category/",
                        "path" => "/images/category/");

                    $this->load->library("upload", $config);

                    if ($this->upload->do_upload('image')) {
                        $url = $config['path'] . $this->upload->data()['file_name'];

                        $category_id = $this->Category_model->add($input, $url);
                    } else {
                        die(json_encode(array(
                            "status" => false,
                            "message" => $this->upload->display_errors()
                        )));
                    }
                }

                $input['category_id'] = $category_id;
            }
        }

        $this->load->view('admin/header', $this->page_data);
        $this->load->view('admin/category/add');
        $this->load->view('admin/footer');
    }

    public function delete($category_id) {
        $where = array(
            "category_id" => $category_id,
        );

        $this->Category_model->delete_where($where);

        redirect("category", "refresh");
    }
}
