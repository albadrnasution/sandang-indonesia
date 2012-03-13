<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Category
 *
 * @author soleman
 */
class Category extends CI_Model{
    //Field : 
    //id - index, 
    //name, 
    //created_date - timestamp, 
    //created_by
    
    function __construct() {
        parent::__construct();
    }
    function get_all_category(){
        return $this->db->get("si_category");
    }
    
    function get_category($data){
        return $this->db->get_where("si_category",$data);
    }
    
    function add_category($data){
        return $this->db->insert("si_category",$data);
    }
    
    function update_category($data,$key){
        $this->db->where($key);
        return $this->db->update("si_category",$data);
    }
    
    function delete_category($key){
        return $this->db->delete("si_category",$key);
    }
}

?>
