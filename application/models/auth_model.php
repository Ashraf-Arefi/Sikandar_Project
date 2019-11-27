<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth_model extends CI_Model {
    public function login($email,$password) {

       $this->db->select("*")->from('users');
       $this->db->where('username',$email);
       $this->db->where('password',$password);
       $query = $this->db->get();

       return ($query->num_rows() == 1) ? $query->result_array() : 'false';
    }
}
