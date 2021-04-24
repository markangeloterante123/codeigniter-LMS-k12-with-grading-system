<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Reg_Dash extends CI_Controller{

	public function __construct(){
 		parent::__construct();
 		if(!$this->session->userdata('super_session')){
	 		redirect('user/reg');
	 	}
	 }
	public function success(){

		$page="home"; 
		if(!file_exists(APPPATH.'views/registrar/'.$page.'.php')){
             show_404();
         }
	    $this->load->view('registrar/header');
	    $this->load->view('registrar/side');
	    $this->load->view('registrar/'.$page);
	    $this->load->view('registrar/right');
	    $this->load->view('registrar/footer');
	}
	
}