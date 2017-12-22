<?php
if (!defined('BASEPATH')) 
    exit('No direct script access allowed');

class Main extends CI_Controller {

    public function index() {
        $this->load->view("header");
        $this->load->view("footer");
    }
    
     public function product() {
        $this->load->view("header");
        $this->load->view("product/productdetail");
        $this->load->view("footer");
    }
}

