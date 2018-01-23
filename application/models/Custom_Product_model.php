<?php 

class Custom_Product_model extends CI_Model{

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

    function get_add_ons($product_id){
        $add_ons = $this->db->get_where("custom_product_add_ons",
        array(
            "custom_product_id" => $product_id
        ))->result_array();

        return $add_ons;
    }
}