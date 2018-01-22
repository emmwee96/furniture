<?php
if (!defined('BASEPATH')) 
    exit('No direct script access allowed');

class Main extends CI_Controller {

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
        $categories = $this->Category_model->get_all();

        $this->page_data = array(
            "categories" => $categories
        );
        $this->load->view("header",$this->page_data);
        $this->load->view("Main/index");
        $this->load->view("footer");
    }
    
    function category($category_id){

        $products = $this->Custom_Product_model->get_where(array(
            "category_id" => $category_id
        ));

        $this->page_data = array(
            "products" => $products
        );

        $this->load->view("header",$this->page_data);
        $this->load->view("Main/category");
        $this->load->view("footer");
    }
     public function product($type){
        $template = $this->Wardrobe_model->get_template($type);
        $product = $this->Wardrobe_model->get($type);
        
        if(!$template){
            die("Coming Soon. Please view our wardrobes");
        }

        $product[0]['product_id'] = $product[0]['custom_product_id'];
        $data = array(
            "product" => $product[0]
        );

        $this->load->view("header",$data);
        $this->load->view($template);
        $this->load->view("footer");
    }

    function cart(){
        $this->load->view("header");
        $this->load->view("Main/cart");
        $this->load->view("footer");
    }

    function checkout(){
        $this->load->view("header");
        $this->load->view("Main/checkout");
        $this->load->view("footer");
    }

    function about(){
        $this->load->view("header");
        $this->load->view("Main/about");
        $this->load->view("footer");
    }

    function login(){
        $this->load->view("header");
        $this->load->view("Main/login");
        $this->load->view("footer");
    }

    function shipping(){
        $this->load->view("header");
        $this->load->view("Main/shipping");
        $this->load->view("footer");
    }
    function address(){
        $this->load->view("header");
        $this->load->view("Main/address");
        $this->load->view("footer");
    }
    function contact(){
        $this->load->view("header");
        $this->load->view("Main/contact");
        $this->load->view("footer");
    }

    function add_to_cart(){
        $data = array(
            "product_id" => $this->input->post("product_id"),
            "name" => $this->input->post("product_name"),
            "options" => $this->input->post("options")
        );
        $cart = $this->session->userdata("cart");

        array_push($cart,$data);

        $this->session->set_userdata("cart",$cart);
    }

    function delete_cart(){
        $index = $this->input->post("index");
        
        $cart = $this->session->userdata("cart");
        
        unset($cart[$index]);
        $new_cart = array();
        foreach($cart as $row){
            array_push($new_cart,$row);
        }

        $this->session->set_userdata("cart",$new_cart);
    }


    function test(){
        $json = array(
            'key' => 'val1',
            'key1' => 'val2'
        );

        die(
            json_encode($json)
        );

        echo 'ok';
    }
}
