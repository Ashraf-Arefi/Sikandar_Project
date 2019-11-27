<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class thesis extends CI_Controller {
    public function __construct() {
      parent::__construct();
      $this->load->model('thesis_model');
    }
        function index($start=0){
          $this->load->library('pagination');
          $config['base_url'] = base_url().'thesis/index';
          $config['total_rows'] = $this->db->count_all_results('thesis');
          $config['per_page'] = 7;
          $config['uri_segment'] =3;
          $config['full_tag_open'] = '<p class="pagination">';
          $config['full_tag_close'] = '</p>';

        //
        //
        //  $config["num_links"] = round($choose);
          $this->pagination->initialize($config);
          $this->load->model('thesis_model');
          $users = $this->thesis_model->getinfo($config['per_page'],$start);
        $data = array();
        $data['users'] = $users;
        $data['pagination'] = $this->pagination->create_links();
            $data['view'] ='list_thesis';
            $this->load->view('layout/admin',$data);
        }

       function getall(){
          $this->load->model('user_model');
          $num=$this->uri->segment(3);
          $config['num_links'] = 2;
         $data['emp'] = $this->user_model->paginate($config['per_page'],$num);
         $this->load->view('list_thesis',$data);
      }
    function create(){
        $this->load->library('form_validation');
        $this->load->model('thesis_model');
        $this->form_validation->set_rules('name',' name','required');
        $this->form_validation->set_rules('father_name',' father_name','required');
        $this->form_validation->set_rules('title','title');
        $this->form_validation->set_rules('teacher',' teacher','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        if($this->form_validation->run()==false){
          $data['view'] ='create';
          $this->load->view('layout/admin',$data);
        }else{
            $formArray = array();
            $formArray['name'] = $this->input->post('name');
            $formArray['father_name'] = $this->input->post('father_name');
            $formArray['title'] = $this->input->post('title');
            $formArray['teacher'] = $this->input->post('teacher');
            $formArray['email'] = $this->input->post('email');
            $this->thesis_model->create($formArray);
            $this->session->set_flashdata('success','recored added successfully');
            redirect(base_url().'index.php/thesis/index');

        }
}
public function edit($userId){
$this->load->library('form_validation');
$this->load->model('thesis_model');
$user= $this->thesis_model->getuser($userId);
$data = array();
        $data['user'] = $user;
$this->form_validation->set_rules('name','name','required');
$this->form_validation->set_rules('father_name',' father_name','required');
$this->form_validation->set_rules('title',' title','required');
$this->form_validation->set_rules('teacher',' teacher','required');
$this->form_validation->set_rules('email','Email','required|valid_email');
if($this->form_validation->run()==false){
$data['view'] ='edit';
$this->load->view('layout/admin',$data);
}else {
$formArray = array();
$formArray['name'] = $this->input->post('name');
$formArray['father_name'] = $this->input->post('father_name');
$formArray['title'] = $this->input->post('title');
$formArray['teacher'] = $this->input->post('teacher');
$formArray['email'] = $this->input->post('email');
$this->thesis_model->updateUser($userId,$formArray);
$this->session->set_flashdata('success','record updated successfully');
redirect(base_url().'index.php/thesis/index');
}
}

function search(){
  $data['view'] ='staff';
  $this->load->view('layout/admin',$data);
}


}
?>
