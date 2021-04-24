<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  User_Dash extends CI_Controller{

	public function __construct(){
 		parent::__construct();
 		if(!$this->session->userdata('user_session')){
	 		redirect('pages/index');
	 	}
	 }
	public function success(){

		$page="clas"; 
		if(!file_exists(APPPATH.'views/user/'.$page.'.php')){
             show_404();
         }
	    $this->load->view('user/header');
	    $this->load->view('user/side');
	    $this->load->view('user/'.$page);
	    //$this->load->view('user/right');
	    $this->load->view('user/footer');
	}
	
}