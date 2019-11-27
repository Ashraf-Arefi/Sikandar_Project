<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Comment extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');

    }


    public function get_comments() {
      $data['view'] ='comment/comment';
      $my_id = $_SESSION['id'];
      $data['comments'] =$this->db->query("select * from comment,users where comment.student_id = users.id and comment.teacher_id = '$my_id'")->result_array();

      // print_r($data['user']);die;
      $this->load->view('layout/admin',$data);
    }

    public function flag() {
        $cm_id = $this->uri->segment(4);
        if ($this->Comments_model->flag($cm_id)) {
            redirect('comments/index/'.$this->uri->segment(3));
        } else {
            // error
            // load view and flash sess error
        }
    }
}

/* End of file comments.php */
/* Location: ./application/controllers/comments.php */
