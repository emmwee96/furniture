<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Banner extends Base_Controller
{

    function __construct()
    {
        parent::__construct();

        if (!$this->session->has_userdata("login_data")) {
            redirect("access/login", "refresh");
        }

        $this->load->model("Banner_model");

        $this->page_data = array();
    }

    function index()
    {
        $sql = "SELECT *, concat( ?, image) from banner";
        $images = $this->db->query($sql, array(site_url()))->result_array();
        $pageData = array(
            "images" => $images
        );

        $this->load->view("admin/header", $pageData);
        $this->load->view("admin/Banner/all");
        $this->load->view("admin/footer");
    }

    function add()
    {
        if($_POST){
            if ($_FILES) {
                if (!empty($_FILES['image']['name'])) {
                    $upload_data = $this->multi_image_upload($_FILES, "image", "banner");
    
                    if (!$upload_data["error"]) {
    
                        $data = array(
                            "image" => $upload_data["urls"][0]
                        );
    
                        $this->Banner_model->insert($data);
    
                        die(json_encode(array(
                            "status" => "SUCCESS"
                        )));
                    } else {
                        die(json_encode(array(
                            "status" => false,
                            "message" => $upload_data["error_message"]
                        )));
                    }
                }
            }   
        }
    }

    function delete($banner_id)
    {
        $this->Banner_model->hard_delete($banner_id);

        redirect("banner", "refresh");
    }
}
