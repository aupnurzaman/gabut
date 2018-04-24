<?php 
 
class Register_model extends CI_Model{   
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}?>