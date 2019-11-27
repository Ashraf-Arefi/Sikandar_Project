<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class manger extends CI_controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('manager_model');
        if(!isset($_SESSION['id'])) {
            redirect('auth/login');
        }
      }
        function index(){
          $data['users'] = $this->manager_model->get_all_users();
          $data['view'] ='admin/view';
          $this->load->view('layout/admin',$data);
        }
        function add(){
          if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('first_name',' first_name','required');
            $this->form_validation->set_rules('last_name',' last_name','required');
            $this->form_validation->set_rules('kind','kind_user','required');
            $this->form_validation->set_rules('username','Usrname','required');
            $this->form_validation->set_rules('password','password','required');
            if($this->form_validation->run()==false){
               //die(validation_errors());
              $data['view'] ='manger/create_user';
              $this->load->view('layout/admin',$data);
            }else {
              $formArray = array();
              $formArray['first_name'] = $this->input->post('first_name');
              $formArray['last_name'] = $this->input->post('last_name');
              $formArray['username'] = $this->input->post('username');
              $formArray['password'] = $this->input->post('password');
              $formArray['kind_user'] = $this->input->post('kind');
            //  print_r($formArray);die;
              $this->manager_model->create($formArray);
              $this->session->set_flashdata('success','recored added successfully');
              redirect('manger/index');
            }
            }else{

              $data['view'] ='manger/create_user';
              $this->load->view('layout/admin',$data);
            }
    }
    function delete($userId){
       $user = $this->manager_model->deleteUser($userId);
       if (!empty($user)) {
         $this->session->set_flashdata('failure','record not found in database');
         redirect(base_url().'index.php/manger/index');
       }
       else {
       $user = $this->manager_model->deleteUser($userId);
       $this->session->set_flashdata('success','record successfully deleted');
       redirect(base_url().'index.php/manger/index');
      }
   }
   }

?>
