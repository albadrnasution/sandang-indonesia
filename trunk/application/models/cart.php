<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cart
 *
 * @author soleman
 */
class Cart extends CI_Model{
    //Field : 
    //id, 
    //cart, 
    //customer, 
    //email,
    //first_name, 
    //last_name, 
    //address, 
    //order_date - timestamp, 
    //quantity, 
    //total, 
    //status - P: pending, S : send, 
    //send_date - datetime
    function __construct() {
        parent::__construct();
    }
    function get_all_cart(){
        return $this->db->get("si_cart");
    }
    
    function get_cart($data){
        return $this->db->get_where("si_cart",$data);
    }
    
    function add_cart($data){
        return $this->db->insert("si_cart",$data);
    }
    
    function update_cart($data,$key){
        $this->db->where($key);
        return $this->db->update("si_cart",$data);
    }
    
    function delete_cart($key){
        return $this->db->delete("si_cart",$key);
    }
}

?>
