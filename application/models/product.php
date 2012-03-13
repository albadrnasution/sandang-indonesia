<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Product
 *
 * @author soleman
 */
class Product extends CI_Model{
    //Field : 
    //id - index,
    //name,
    //decription,
    //permalink - link,
    //price,
    //image,
    //category,
    //shop,
    //created_date - timestamp
    
    function __construct() {
        parent::__construct();
    }
    
    function get_all_product(){
        return $this->db->get("si_product");
    }
    
    function get_product($data){
        return $this->db->get_where("si_product",$data);
    }
    
    function add_product($data){
        return $this->db->insert("si_product",$data);
    }
    
    function update_product($data,$key){
        $this->db->where($key);
        return $this->db->update("si_product",$data);
    }
    
    function delete_product($key){
        return $this->db->delete("si_product",$key);
    }
}

?>
