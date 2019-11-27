<?php
class comment_model extends CI_model{

  public function create_comment($title,$body) {
        $data = array(
            'title' => $title,
            'body' => $body,
            'created_by' => $_SESSION['id']
        );
        $this->db->insert('comment',$data);
        return true;

    }

    public function get_all_posts() {
        $this->db->select("*")->from('comment');
        $this->db->order_by('comment.id', 'DESC');
        $this->db->join('users','users.id = comment.student_id');
        $query = $this->db->get();
        return $query->result_array();
    }
  }
    ?>
