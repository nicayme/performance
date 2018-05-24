<?php 
class My404 extends CI_Controller 
{
 public function __construct() 
 {
    parent::__construct(); 
 } 

 public function index() 
 { 
    $this->output->set_status_header('404'); 
    //$this->load->view('err404');//loading in custom error view
	 $data['systemsettings'] = $this->pages_model->get_systemsettings();
     $this->load->view('template/header', $data);
  
     $this->load->view('pages/error404', $data);
      $this->load->view('template/footer', $data);

 } 
} 