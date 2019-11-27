<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class teacher extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if(!isset($_SESSION['id'])) {
            redirect('auth/login');
        }
    }
    function index(){
      $this->load->library('pagination');
      $config['base_url'] = 'http://localhost/pro/teacher/index';
      $config['total_rows'] = 200;
      $config['per_page'] = 20;
      $this->pagination->initialize($config);

echo $this->pagination->create_links();
    $this->load->model('teacher_model');
    $users = $this->teacher_model->getinfo();
    $data = array();
    $data['users'] = $users;
        $data['view'] ='admin/teacher';
        $this->load->view('layout/admin',$data);
    }
    function create(){
        $this->load->library('form_validation');
        $this->load->model('teacher_model');
        $this->form_validation->set_rules('first_name','first_name','required');
        $this->form_validation->set_rules('last_name','last_name','required');
        $this->form_validation->set_rules('title',' title','required');
        $this->form_validation->set_rules('deparment','deparment','required');
        if($this->form_validation->run()==false){
        $data['teachers'] = $this->db->select('id,first_name,last_name')->from('users')->where('kind_user','teacher')->get()->result_array();
        $data['view'] ='admin/create';
        $this->load->view('layout/admin',$data);
        }
        else{
            $formArray = array();
            $formArray['teacher'] = $this->input->post('teacher');
            $formArray['title'] = $this->input->post('title');
            $formArray['deparment'] = $this->input->post('deparment');
            $this->teacher_model->create($formArray);
            $this->session->set_flashdata('success','recored added successfully');
            redirect(base_url().'index.php/teacher/index');
        }
}
  public function update($userId){
  $this->load->library('form_validation');
  $this->load->model('teacher_model');
  $user= $this->teacher_model->getuser($userId);
  $data = array();
  $data['user'] = $user;
  $this->form_validation->set_rules('teacher','teacher','required');
  $this->form_validation->set_rules('title','title','required');
  $this->form_validation->set_rules('deparment',' deparment','required');
  if($this->form_validation->run()==false){
  $data['view'] ='teacher/view';
  $this->load->view('layout/admin',$data);
  }else {
  $formArray = array();
  $formArray['teacher'] = $this->input->post('teacher');
  $formArray['title'] = $this->input->post('title');
  $formArray['deparment'] = $this->input->post('deparment');
  $this->teacher_model->updateUser($userId,$formArray);
  $this->session->set_flashdata('success','record updated successfully');
  redirect(base_url().'index.php/teacher/index');
  }

}
function detail($code){
  $code = $this->uri->segment(3);
  $this->load->model('teacher_model');
  $data['view'] ='teacher/detail';
  $data['user'] = $this->teacher_model->getbyid($code);
  // print_r($data['user']);die;
  $this->load->view('layout/admin',$data);
}
public function add_comment() {
      if($_SERVER['REQUEST_METHOD'] == 'POST') {
          //get and send data to database

          $data = [
            'title' =>  $this->input->post('title'),
                'body' =>  $this->input->post('body'),
                    'student_id' =>  $this->input->post('student_id'),
                        'teacher_id' =>  $this->input->post('teacher_id')
          ];
        //   $this->load->model('comment_model');
        //  $this->comment_model->create_comment($title,$body);
        $this->db->insert('comment' ,$data);
         redirect(base_url().'index.php/teacher/index');
      }else {
          $this->load->view('teacher');
      }
  }
}
?>
