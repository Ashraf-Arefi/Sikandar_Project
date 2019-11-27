<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class searching extends CI_controller{
    public function __construct() {
        parent::__construct();
          $this->load->model("thesis_model");
        if(!isset($_SESSION['id'])) {
            redirect('auth/login');
        }
    }

	public function index(){
		$data['view'] ='search';
		$this->load->view('layout/admin',$data);
}

  public function search() {
    if(isset($_POST['key'])) {
      $keyword = $_POST['key'];
      $data = $this->thesis_model->search($keyword);
      echo json_encode($data);
      die;
    }else {
      echo 'did not recive';
      die;
    }
    echo 'hi';
  }
}
