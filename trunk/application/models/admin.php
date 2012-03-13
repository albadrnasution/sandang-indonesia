<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin
 *
 * @author soleman
 */
class Admin extends CI_Model{
    //Field : 
    //id - index, 
    //username, 
    //password - md5
    
    function __construct() {
        parent::__construct();
    }
    
    function get_all_admin(){
        return $this->db->get("si_admin");
    }
    
    function get_admin($data){
        return $this->db->get_where("si_admin",$data);
    }
    
    function add_admin($data){
        return $this->db->insert("si_admin",$data);
    }
    
    function update_admin($data,$key){
        $this->db->where($key);
        return $this->db->update("si_admin",$data);
    }
    
    function delete_admin($key){
        return $this->db->delete("si_admin",$key);
    }
}

?>
