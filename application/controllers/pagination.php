<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class pagination extends CI_controller{
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('pagination_model');
        $this->load->library('pagination');
        if(!isset($_SESSION['id'])) {
            redirect('auth/login');
        }
    }

	function pagination(){
    $config = array();
    $config['base_url'] = base_url().'pagination'
    $config['total_rows'] = $this->pagination_model->record_count();
    $config['per_page'] = 7;
    $config['uri_segment'] =3;
    $choose =   $config['total_rows']/$config['per_page'];
    $config["num_links"] = round($choose);
    $this->pagination->initialize($config);
    $page = ($this->uri->segment(3))?$this->uri_segment(3):0;
    $data['result'] = $this->pagination_model->fetch_country($config['per_page'],$page);
    $data['links'] = $this->pagination->create_links()
    $this->load->view('pagination',$data);

  }
