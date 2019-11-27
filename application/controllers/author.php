<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class author extends CI_controller{
    public function __construct() {
        parent::__construct();
        if(!isset($_SESSION['id'])) {
            redirect('auth/login');
        }
      }
        function index(){
          $data['view'] ='about/info';
          $this->load->view('layout/admin',$data);
        }
    }
?>
