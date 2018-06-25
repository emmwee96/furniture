<?php

class Product_model extends Base_Model{
    
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
        die($templates);
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
}