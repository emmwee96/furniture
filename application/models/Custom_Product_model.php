<?php 

class Custom_Product_model extends Base_Model{

    function get_all() {
        $this->db->select('*');
        $this->db->from('custom_product');

        $query = $this->db->get();

        return $query->result_array();
    }
    
    function get_images_where($where){
        $this->db->where($where);
        $products = $this->db->get("custom_product_image")->result_array();

        return $products;
    }
    
    public function update($custom_product_id, $input) {
        $required = array(
            "name"
        );

        $error = false;

        foreach ($required as $field) {
            if (empty($_POST[$field])) {
                $error = true;
                $error_message = "Please do not leave " . $field . " empty";
            }
        }

        if ($error) {
            die(json_encode(array(
                "status" => false,
                "message" => $error_message
            )));
        } else {
            $data = array(
                "name" => $input['name'],
                "banner" => $input['banner']
            );

            $where = array(
                "custom_product_id" => $custom_product_id
            );

            $this->db->where($where);
            $this->db->update('custom_product', $data);
        }
    }
    
    public function add_image($url, $custom_product_id) {

        $data = array(
            "custom_product_id" => $custom_product_id,
            "url" => $url
        );

        $this->db->insert('custom_product_image', $data);
    }
    
    public function delete_image($where) {
        $this->db->where($where);
        $this->db->delete('custom_product_image');
    }
    
    function get_where($where){
        $this->db->where($where);
        $products = $this->db->get("custom_product")->result_array();

        return $products;
    }
    function get_template($type){
        $templates = array(
            "open-wardrobe",
            "swing-door-wardrobe",
            "sliding-wardrobe",
            "bottom-cabinet",
            "top-cabinet"
        );

        $exist = false;
        foreach($templates as $file){
            if($file == $type){
                $exist = true;
                break;
            }
        }

        if(!$exist){
            return false;
        }

        return "Main/custom/".$type;
    }

    function get($type){
        $product = $this->db->get_where("custom_product",array(
            "name" => $type
        ))->result_array();

        return $product;
    }
    
    function get_labels($product_id){
        $label = $this->db->get_where("custom_product_fields",array(
            "custom_product_id" => $product_id))->result_array();


        for($i = 0; $i < count($label); $i++){
            $label[$i]['options'] = $this->db->get_where("custom_product_options",array(
                'custom_product_fields_id' => $label[$i]['custom_product_field_id']
            ))->result_array();
        }
        return $label;
    }
    
    function get_images($product_id){
        $product = $this->db->get_where("custom_product_image",array(
            "custom_product_id" => $product_id
            ))->result_array();
        return $product;
    }

    function get_add_ons($product_id){
        $add_ons = $this->db->get_where("custom_product_add_ons",
        array(
            "custom_product_id" => $product_id
        ))->result_array();

        return $add_ons;
    }
}