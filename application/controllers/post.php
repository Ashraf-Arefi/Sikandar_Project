<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class post extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('post_model');
        if(!isset($_SESSION['id'])) {
            redirect('auth/login');
        }
    }
          public function index() {
       $data['posts'] =$this->post_model->get_all_posts();

            $data['view'] ='posts/home';
            $this->load->view('layout/admin',$data);
        }
    public function create_post() {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            //get and send data to database
            $title = $this->input->post('title');
            $body = $this->input->post('body');
           $this->post_model->create_post($title,$body);
           redirect('post/index?post=success');
        }else {
            $this->load->view('posts/post');
        }
    }

}
