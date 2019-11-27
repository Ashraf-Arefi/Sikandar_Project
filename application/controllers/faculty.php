<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class faculty extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if(!isset($_SESSION['id'])) {
            redirect('auth/login');
        }
    }
    public function index(){
        $data['view'] ='admin/index';
        $this->load->view('layout/admin',$data);
    }
}
?>
