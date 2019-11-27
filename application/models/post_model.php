<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class post_model extends CI_Model {
    public function create_post($title,$body) {
        $data = array(
            'title' => $title,
            'body' => $body,
            'created_by' => $_SESSION['id']
        );
        $this->db->insert('posts',$data);
        return true;

    }
    public function get_all_posts() {
        $this->db->select("*")->from('posts');
        $this->db->order_by('posts.id', 'DESC');
        $this->db->join('users','users.id = posts.created_by');
        $query = $this->db->get();
        return $query->result_array();
    }
}
