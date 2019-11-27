<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Department extends CI_controller{
    public function __construct() {
        parent::__construct();
        if(!isset($_SESSION['id'])) {
            redirect('auth/login');
        }
    }

	public function index(){
		$data['view'] ='department/add';
		$this->load->view('layout/admin',$data);
}
}
?>
