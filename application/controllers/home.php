<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if(!isset($_SESSION['id'])) {
            redirect('auth/login');
        }
    }

    public function index() {
        $data['view'] ='home';
      $this->load->view('layout/admin',$data);
    }

}
