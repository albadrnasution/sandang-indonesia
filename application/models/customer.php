<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Customer
 *
 * @author soleman
 */
class Customer extends CI_Model{
    //Field : 
    //id - index, 
    //email, 
    //password - md5, 
    //first_name, 
    //last_name, 
    //address, 
    //phone - not obligate, 
    //created_date - timestamp, 
    //status - A:Activated, D:Deactivated
    
    function __construct() {
        parent::__construct();
    }
    function get_all_customer(){
        return $this->db->get("si_customer");
    }
    
    function get_customer($data){
        return $this->db->get_where("si_customer",$data);
    }
    
    function add_customer($data){
        return $this->db->insert("si_customer",$data);
    }
    
    function update_customer($data,$key){
        $this->db->where($key);
        return $this->db->update("si_customer",$data);
    }
    
    function delete_customer($key){
        return $this->db->delete("si_customer",$key);
    }
}

?>
