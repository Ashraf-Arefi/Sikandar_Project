<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if(!isset($_SESSION['id'])) {
            redirect('auth/login');
        }
        $this->load->model('dashboard_model');
    }
    public function index(){
    
        $data['view'] ='admin/dashboard';
        $data['total_thesis'] =$this->dashboard_model->get_table_count('thesis');
          $data['total_teacher'] =$this->dashboard_model->get_table_count('teacher');
          $data['total_dep'] =$this->dashboard_model->get_table_count('department');
        $this->load->view('layout/admin',$data);

    }
}
?>
