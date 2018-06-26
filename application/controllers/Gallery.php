<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends Base_Controller{

    function __construct()
    {
        parent::__construct();

        if (!$this->session->has_userdata("login_data")) {
            redirect("access/login", "refresh");
        }
    }

    function index(){
        $sql = "SELECT *, concat( ?, image) from gallery";
        $images = $this->db->query($sql,array(site_url()))->result_array();
        $pageData = array(
            "images" => $images
        );

        $this->load->view("admin/header",$pageData);
        $this->load->view("admin/Gallery/all");
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
            "upload_path" => "./images/gallery/",
            "allowed_types" => "jpg|png|gif|jpeg"
        );
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('image')){
            $this->db->insert('gallery',array(
                "image" => "/images/gallery/".$this->upload->data()['file_name']
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
}
