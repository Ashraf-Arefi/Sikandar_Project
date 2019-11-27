<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('auth_model');
    }
	public function login() {

	

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $this->input->post("email");//$_POST['email']
            $password = $this->input->post("password");//$_POST['email']

            $login_status = $this->auth_model->login($email,$password);
            if($login_status != 'false') {
                //create session and redirect to homepage
                $this->create_session($login_status[0]);
                redirect('dashboard/index');
            }else {
                redirect('auth/login?login=failed');
            }

        }else {
            $this->load->view('login');
        }


    }

    public function logout() {
        $array_items = array('id', 'name','father_name','title','teacher','email');

        $this->session->unset_userdata($array_items);
        redirect('auth/login');
    }

    public function create_session($data) {
        $this->session->set_userdata($data);
    }



}
