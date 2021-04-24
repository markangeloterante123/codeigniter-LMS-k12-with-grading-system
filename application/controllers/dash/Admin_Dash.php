<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Admin_Dash extends CI_Controller{

	public function __construct(){
 		parent::__construct();
 		if(!$this->session->userdata('admin_session')){
	 		redirect('user/reg');
	 	}
	 }
	public function success(){
		$page="clas"; 
		if(!file_exists(APPPATH.'views/admin/'.$page.'.php')){
             show_404();
         }
	    $this->load->view('admin/header');
	    $this->load->view('admin/side');
	    $this->load->view('admin/'.$page);
	    // $this->load->view('admin/right');
	    $this->load->view('admin/footer');
	}
	
}