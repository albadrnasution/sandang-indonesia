<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Shipping
 *
 * @author soleman
 */
class Shipping extends CI_Model{
    //Field : 
    //id, 
    //name,
    //created_date
    function __construct() {
        parent::__construct();
    }
    
    function get_all_shipping(){
        return $this->db->get("si_shipping");
    }
    
    function get_shipping($data){
        return $this->db->get_where("si_shipping",$data);
    }
    
    function add_shipping($data){
        return $this->db->insert("si_shipping",$data);
    }
    
    function update_shipping($data,$key){
        $this->db->where($key);
        return $this->db->update("si_shipping",$data);
    }
    
    function delete_shipping($key){
        return $this->db->delete("si_shipping",$key);
    }
}

?>
