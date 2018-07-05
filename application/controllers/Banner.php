<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends Base_Controller{

    function __construct()
    {
        parent::__construct();

        if (!$this->session->has_userdata("login_data")) {
            redirect("access/login", "refresh");
        }

        $this->load->model("Banner_model");

        $this->page_data = array();
    }

    function index(){
        $sql = "SELECT *, concat( ?, image) from banner";
        $images = $this->db->query($sql,array(site_url()))->result_array();
        $pageData = array(
            "images" => $images
        );

        $this->load->view("admin/header",$pageData);
        $this->load->view("admin/Banner/all");
        $this->load->view("admin/footer");
    }

    function add(){
       

        if (empty($_FILES['image']['name'])){ // check file exist
            die(json_encode(array(
                "status" => "ERROR",
                "message" => "File not found"
            )));
        }

        // upload code
        $config = array(
            "upload_path" => "./images/banner/",
            "allowed_types" => "jpg|png|gif|jpeg"
        );
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('image')){
            $this->db->insert('banner',array(
                "image" => "/images/banner/".$this->upload->data()['file_name']
            ));
            die(json_encode(array(
                "status" => "SUCCESS"
            )));
        }else {
            die(json_encode(array(
                "status" => "ERROR",
                "message" => $this->upload->display_errors()
            )));
        }
    }

    function delete($banner_id){
        $this->Banner_model->hard_delete($banner_id);

        redirect("banner", "refresh");
    }
}
