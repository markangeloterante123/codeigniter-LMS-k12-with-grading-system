<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reg extends CI_Controller {

	public function __construct(){
	  	parent::__construct();
	  	$this->load->model('model_users');
	 	$this->load->database();
	 	 if($this->session->userdata('super_session')){	  		
	   		 redirect('dash/Reg_Dash/success');
	    	}
	 }
	 //for registrar login
	public function reg(){
		$this->load->view('login/reg_log');
	}
	public function login(){
		$data1=$this->input->post('user');
	    $data2=$this->input->post('pass');
	    $pass=bin2hex($data2);
	    
	    $this->db->select('*');
	    $this->db->from("tbl_account"); 
	    $this->db->where('username',$data1);
	    $this->db->where('password',$pass);
	    $this->db->where('department','3');
	    $this->db->where('status','1');//department 3 registrar 2admin while 1 is user  
	    $query = $this->db->get();
	        if($query->num_rows() != 0){
	            $id=0;
	            foreach ($query->result() as $value){
	                $id=$value->id;
	            }
	            	  $newdata = array(
		                    'super_session'=> $id,
		                    'logged_in' => TRUE
              		  );
                	  	$this->session->set_userdata($newdata);
                 	 	$pages="success"; 
	            		$this->load->view('errors/'.$pages);

	        }
	         else{
	            $pages="error"; 
	            $this->load->view('errors/'.$pages);
	        }
	}
}
?>