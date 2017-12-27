<?php

class Wardrobe_model extends CI_Model{
    
    function get_template($type){
        $templates = array(
            "open-wardrobe",
            "swing-door-wardrobe",
            "sliding-wardrobe"
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
}