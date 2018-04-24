<?php


class Login_model extends CI_Model
{
// public function login_admin($username=NULL, $password)
//     {
//         $this->db->select('username, password');
//         $this->db->from('admin');
//         $this->db->where('username', $username);
//         $this->db->where('password', $password);
//         // $this->db->limit(1);

//         $query = $this->db->get();
//         return $query;
//     }



public function login_users($username=NULL, $password)
    {
        $this->db->select('username, password');
        $this->db->from('konsumen');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        // $this->db->limit(1);

        $query = $this->db->get();
        return $query;
    }
}