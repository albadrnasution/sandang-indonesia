<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Shop
 *
 * @author soleman
 */
class Shop extends CI_Model{
    //field : 
    //id - index,
    //username,
    //password,
    //name,
    //description,
    //address,
    //email,
    //phone,
    //web - not obligate,
    //created_date - timestamp,
    //created_by,
    //status - A : Activated, D: Deactivate
    
    function __construct() {
        parent::__construct();
    }
    
    function get_all_shop(){
        return $this->db->get("si_shop");
    }
    
    function get_shop($data){
        return $this->db->get_where("si_shop",$data);
    }
    
    function add_shop($data){
        return $this->db->insert("si_shop",$data);
    }
    
    function update_shop($data,$key){
        $this->db->where($key);
        return $this->db->update("si_shop",$data);
    }
    
    function delete_shop($key){
        return $this->db->delete("si_shop",$key);
    }
}

?>
