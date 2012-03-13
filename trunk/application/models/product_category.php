<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Product_Category
 *
 * @author soleman
 */
class Product_category extends CI_Model{
    //Field : 
    //id, 
    //product, 
    //category
    function __construct() {
        parent::__construct();
    }
    
    function get_all_product_category(){
        return $this->db->get("si_product_category");
    }
    
    function get_product_category($data){
        return $this->db->get_where("si_product_category",$data);
    }
    
    function add_product_category($data){
        return $this->db->insert("si_product_category",$data);
    }
    
    function update_product_category($data,$key){
        $this->db->where($key);
        return $this->db->update("si_product_category",$data);
    }
    
    function delete_product_category($key){
        return $this->db->delete("si_product_category",$key);
    }
}

?>
