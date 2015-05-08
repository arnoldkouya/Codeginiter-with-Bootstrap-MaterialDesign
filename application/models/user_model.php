<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

	function get_all_user(){
            $this->db->select()->from('user');
            $query=$this->db->get();
            return $query->result_array();
    }
        
        
    function get_user($id_user){
            $this->db->select()->from('user')->where('id_user',$id_user);
            $query=$this->db->get();
            return $query->first_row('array');
    }
    function select_user_id($id_user){
            $this->db->select('id_user')->from('user')->where('id_user',$id_user);
            $query=$this->db->get();
            return $query->first_row('array');
    }

        
        
    function insert_user($data){
            $this->db->insert('user',$data);
            return $this->db->insert_id();
    }

        
        
    function update_user($id_user,$data){
            $this->db->where('id_user',$id_user);
            $this->db->update('user',$data);
    }

        
        
    function delete_user($id_user){
            $this->db->where('id_user',$id_user);
            $this->db->delete('user');
    }

}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */