<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
	  	parent::__construct();
	  	$this->load->model('model_users');
	 	$this->load->database();
	 	 if($this->session->userdata('user_session')){	  		
	   		 redirect('dash/User_Dash/success');
	    	}
	     if($this->session->userdata('admin_session')){	  		
	   		 redirect('dash/Admin_Dash/success');
	    	}
	     if($this->session->userdata('super_session')){	  		
	   		 redirect('dash/Reg_Dash/success');
	    	}
	 }
	 //for registrar login
	public function reg(){
		redirect('pages/index');
	}
	public function login(){
		$data1=$this->input->post('user');
	    $data2=$this->input->post('pass');
	    $pass=bin2hex($data2);
	    
	    $this->db->select('*');
	    $this->db->from("tbl_account"); 
	    $this->db->where('username',$data1);
	    $this->db->where('password',$pass);
	    // $this->db->where('department','1');
	    $this->db->where('status','1');//department 3 registrar 2admin while 1 is user  
	    $query = $this->db->get();
	        if($query->num_rows() != 0){
	            $id=0;
	            $department = 0;
	            foreach ($query->result() as $value){
	                $id=$value->id;
	                $student_id=$value->student_id;
	                $department=$value->department;
	            }
	            if($department == '3'){
	            	 $newdata = array(
		                    'super_session'=> $id,
		                    'logged_in' => TRUE
              		  );
                	  	$this->session->set_userdata($newdata);
                 	 	$pages="success"; 
	            		$this->load->view('errors/'.$pages);
	            }
	            else if($department == '2'){
	            	$newdata = array(
		                    'admin_session'=> $id,
		                    'logged_in' => TRUE
              		  );
                	  	$this->session->set_userdata($newdata);
                 	 	$pages="success_admin"; 
	            		$this->load->view('errors/'.$pages);
	            }
	            else if($department == '1'){
	            	 $newdata = array(
		                    'user_session'=> $id,
		                    'student_id'=>$student_id,
		                    'logged_in' => TRUE
              		  );
                	  	$this->session->set_userdata($newdata);
                 	 	$pages="success_user"; 
	            		$this->load->view('errors/'.$pages);
	            }
	            	 
	        }
	         else{
	            $pages="error"; 
	            $this->load->view('errors/'.$pages);
	        }
	}
}
