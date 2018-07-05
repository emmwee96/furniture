<?php
if (!defined('BASEPATH')) 
    exit('No direct script access allowed');

class Main extends Base_Controller{

    function __construct(){
        parent::__construct();

        $this->load->model("Wardrobe_model");
        $this->load->model("Orders_model");
        $this->load->model("Category_model");
        $this->load->model("Custom_Product_model");
        $this->load->model("Faq_model");
        $this->load->model("Faq_category_model");
        $this->load->model("Banner_model");
        $this->load->model("Gallery_model");

        if(!$this->session->has_userdata("cart")){
            $this->session->set_userdata("cart",array());
        }
    }
    public function index() {
        $categories = $this->Category_model->get_all();

        $this->page_data = array(
            "categories" => $categories
        );
        
        $this->page_data["banner"] = $this->Banner_model->get_all_ordered("banner_id DESC");

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
        $template = $this->Custom_Product_model->get_template($type);
        $product = $this->Custom_Product_model->get($type);
       
        if(!$template){
            die("Coming Soon. Please view our wardrobes");
        }

        $product[0]['product_id'] = $product[0]['custom_product_id'];
        $data = array(
            "product" => $product[0],
            "selection_labels" => $this->Custom_Product_model->get_labels($product[0]['product_id']),
            "add_ons" => $this->Custom_Product_model->get_add_ons($product[0]['product_id']),
            "product_image" => $this->Custom_Product_model->get_images($product[0]['product_id']),
            "recommended_image" => $this->Custom_Product_model->get_recommended_images($product[0]['product_id'])
        );

        $this->load->view("header",$data);
        $this->load->view($template);
        $this->load->view("footer");
    }

    function cart(){
        // $this->debug($this->session->userdata("cart"));

        $this->load->view("header");
        $this->load->view("Main/cart");
        $this->load->view("footer");
    }

    function checkout(){
        $this->load->view("header");
        $this->load->view("Main/checkout");
        $this->load->view("footer");
    }

    function gallery(){
        
        $this->page_data["images"] = $this->Gallery_model->get_all_ordered("gallery_id DESC");
        
        $this->load->view("header",$this->page_data);
        $this->load->view("Main/gallery");
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
    function FAQ(){

        $faq_category = $this->Faq_category_model->get_all();

        $i = 0;
        foreach($faq_category as $row){

            $where = array(
                "faq.faq_category_id" => $row["faq_category_id"]
            );

            $faq = $this->Faq_model->get_where($where);

            $faq_category[$i]["faq"] = $faq;

            $i++;
        }

        $this->page_data["faq_category"] = $faq_category;

        $this->load->view("header", $this->page_data);
        $this->load->view("Main/faq");
        $this->load->view("footer");
    }

    function add_to_cart(){
        $data = array(
            "product_id" => $this->input->post("product_id"),
            "name" => $this->input->post("product_name"),
            "options" => $this->input->post("options"),
            "height" => $this->input->post("height"),
            "width" => $this->input->post("width"),
            "total" => $this->input->post("total")
        );

        $cart = $this->session->userdata("cart");

        array_push($cart,$data);

        $this->session->set_userdata("cart",$cart);

        die(json_encode(array(
            "status" => "SUCCESS",
            'counter' => count($cart)
        )));
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
        $this->load->model("Invoice_model");
        $this->Invoice_model->generate_invoice(3);
    }

    function refresh_cart(){
        $cartBody = "";
       foreach($this->session->userdata("cart") as $row){ 
           $cartBody.= '<div class="cart_row">';
            $cartBody.= $row['name'] .' <span class="pull-right">$'.$row['total'].'</span>';
            $cartBody.= '</div>';
       }
        $cartBody.= '<br><a class="btn btn-info" href="'. site_url('Main/cart').'">Checkout</a>';

        die(json_encode(array(
            "status" => true,
            "data" => array(
               "counter" => count($this->session->userdata("cart")),
               "cart" => $cartBody
            )
        )));
    }

    function removeCartRow($targetRow){
        $cart = $this->session->userdata('cart');
        $newCart = array();
        for($i = 0; $i < count($cart); $i++){
            if ($targetRow == $i)
                continue;
            array_push($newCart,$cart[$i]);
        }
        $this->session->set_userdata("cart",$newCart);

        redirect("Main/cart",'refresh');
    }
    function place_order(){
        if($_POST){
            // check for user

            $user = $this->db->get_where("user",array(
                "email" => $this->input->post("email")
            ))->result_array();

            if(count($user)){
               $user_id = $user[0]['user_id'];
            }else{
                $this->db->insert("user",array(
                    "email" => $this->input->post("email")
                ));
                $user_id = $this->db->insert_id();
            }

            
            $cart = $this->session->userdata('cart');
            if(!count($cart)){
                die(json_encode(array(
                    "status" => "ERROR",
                    "message" => "Cart empty!"
                )));
            }
            $this->db->insert("orders",array(
                "user_id" => $user_id,
                "name" => $this->input->post("name"),
                "contact" => $this->input->post("contact"),
                "address1" => $this->input->post("address1"),
                "address2" => $this->input->post("address2"),
                "postcode" => $this->input->post("postcode"),
                "state" => $this->input->post("state"),
                "city" => $this->input->post("city"),
                "promo_code" => $this->input->post("promo_code"),
                "remarks" => $this->input->post("remarks")
            ));

            $order_id = $this->db->insert_id();

            $grand_total = 0;
            foreach($cart as $row){
                $this->db->insert("order_product",array(
                    "order_id" => $order_id,
                    "product_id" => $row['product_id'],
                    "name" => $row['name'],
                    "total" => $row['total'],
                    "height" => $row['height'],
                    "width" => $row['width'],
                    "options" => json_encode($row['options'])
                ));

                $grand_total += $row["total"];
            }

            $where = array(
                "order_id" => $order_id
            );

            $data = array(
                "total" => $grand_total
            );

            $this->Orders_model->update_where($where, $data);


            $this->session->set_userdata("cart",[]);
            die(json_encode(array(
                "status" => "SUCCESS",
                
            )));
        }
    }
}
