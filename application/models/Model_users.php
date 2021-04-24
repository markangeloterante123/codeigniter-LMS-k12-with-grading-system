<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_users extends CI_model{
	
	public function insert($data = array()){ 
        $insert = $this->db->insert_batch('tbl_lms_file',$data); 
        return $insert; 
    } 
    public function upload($data = array()){
    	$result = $this->db->insert_batch('tbl_images_landing',$data); 
        return $result; 
    }
    public function upload2($data = array()){
    	$result = $this->db->insert_batch('tbl_lms_submit',$data); 
        return $result; 
    }
    // public function update_answer($data = array()){
    // 	$result = $this->db->update_batch('tbl_lms_submit',$data); 
    //     return $result;	
    // }
     public function upload3($data = array()){
    	$result = $this->db->insert_batch('tbl_request_file',$data); 
        return $result; 
    }
    //--- use [folder_upload, ]
    public function upload4($data = array()){
    	$result = $this->db->insert_batch('tbl_lms_file',$data); 
        return $result; 
    }
    //--- end here
    //--- insert masterlist
    public function insertExcel($data = array(), $data1 = array()){ 
    	$this->db->insert_batch('tbl_master_list',$data);
    	$this->db->where('section','');
    	$this->db->delete('tbl_lms_section');
        $this->db->where('student_id','');
    	$result =$this->db->delete('tbl_master_list');
    	return $result;
    }
    //--- end here
    //--- concern student graph
    public function concernGraph(){
    	$this->db->select('*');
    	$this->db->from('tbl_lms_concern');
    	$query = $this->db->get();
    	return $query->result();
    }
    //--- end here
    //--- insert questionnaire
    public function insertQuestion($data = array(), $data1 = array()){ 
    	$this->db->insert_batch('tbl_question',$data);
    	$this->db->where('question','');
    	$result =$this->db->delete('tbl_question');
    	return $result;
    }
    //--- end here
    public function user_search(){
    	$name = $this->input->post('name');
    	$this->db->select("*");
    	$this->db->from('tbl_account');
    	if($name != ''){
			  $this->db->like('fullname', $name);
			  $this->db->or_like('nickname', $name);
		  }
    	$this->db->order_by('id', 'DESC');
    	$this->db->where('status','1');
    	$query = $this->db->get();
		return $query->result();
    }
     public function master_search(){
    	$name = $this->input->post('name');
    	$this->db->select("*");
    	$this->db->from('tbl_master_list');
    	if($name != ''){
			  $this->db->like('student_name', $name);
			  $this->db->or_like('student_id', $name);
			  $this->db->or_like('sec_year', $name);
		  }
		$this->db->where('status','0');
		$this->db->order_by('lms_acc','DESC');
    	$this->db->order_by('student_name');

    	$query = $this->db->get();
		return $query->result();
    }
     public function student_search(){
    	$name = $this->input->post('name');
    	$this->db->select("*");
    	$this->db->from('tbl_account');
    	$this->db->where('department','1');
    	if($name != ''){
			  $this->db->like('fullname', $name);
			  $this->db->or_like('nickname', $name);
			  $this->db->or_like('student_id', $name);
			  $this->db->or_like('cor_sec', $name);
		  }
    	$this->db->order_by('fullname');
    	$this->db->limit(60);
    	$query = $this->db->get();
		return $query->result();
    }
    //--- show search class
     public function class_search(){
    	$name = $this->input->post('name');
    	$this->db->select("*");
    	$this->db->from('tbl_class');
    	if($name != ''){
			  $this->db->like('section_yr', $name);
			  $this->db->or_like('class_subject', $name);
			  $this->db->or_like('course', $name);
			  $this->db->or_like('admin', $name);	
		  }
    	$this->db->order_by('id', 'DESC');
    	$this->db->where('status','1');
    	$query = $this->db->get();
		return $query->result();
    }
    //--- end here
    //--- rotally used
	public function data($data,$field,$table){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($field,$data);
		$this->db->order_by('id','DESC');
		$query = $this->db->get();
		return $query->result();
	}
	//--- end here
	//--- display class
	public function dataClass($data,$field,$table){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($field,$data);
		$this->db->where('act_sem','0');
		$this->db->order_by('id','DESC');
		$query = $this->db->get();
		return $query->result();	
	}
	//--- end jhere
	public function data2($table){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('type','0');
		$this->db->order_by('id','DESC');
		$query = $this->db->get();
		return $query->result();
	}
	//--- display student in masterlist
	public function data2Sec($table){
		$this->db->distinct('sec_year');
		$this->db->select('sec_year, instructor');
		$this->db->from($table);
		$this->db->where('status','0');
		$this->db->order_by('sec_year','asc');
		$query = $this->db->get();
		return $query->result();
	}
	//--- end here
	//--- gallery images
	public function data2Gal($table){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->order_by('id','DESC');
		$query = $this->db->get();
		return $query->result();
	}
	//--- end here
	//--- wall pages
	public function pagewall($table){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->order_by('id','random');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->result();
	}
	//--- end here
	//--- landing pages
	public function datalan($table){
		$this->db->select('*');
		$this->db->from($table);
		$query = $this->db->get();
		return $query->result();
	}
	//--- end here
	//--- uses [ajax_folder_view, ajax_back_folder, ajax_files_view,  ]
	public function data3($data,$field,$table){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($field,$data);
		$query = $this->db->get();
		return $query->result();
	}
	//--- end here
	public function data4(){
		$this->db->select('*');
		$this->db->from('tbl_account');
		$this->db->where('department >=','2');
		$this->db->where('department <=','3');
		$query = $this->db->get();
		return $query->result();
	}

	public function data5($data,$field,$table,$con){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($field,$data);
		$this->db->where('type >=',$con);
		$this->db->where('acept','0');
		$this->db->order_by('id','DESC');
		$query = $this->db->get();
		return $query->result();
	}
	public function data5Admin($data,$field,$table,$con){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($field,$data);
		$this->db->where('type >=',$con);
		$this->db->order_by('id','DESC');
		$query = $this->db->get();
		return $query->result();
	}
	public function data6($table){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('type','0');
		$this->db->order_by('id','DESC');
		$query = $this->db->get();
		return $query->result();
	}
	public function data7($table){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->order_by('lms_acc','DESC');
		$this->db->order_by('sec_year');
		$this->db->order_by('student_name');
		$query = $this->db->get();
		return $query->result();
	}

	//all ajax parts dito para sa no. of case reports and complain ng students
	public function ajax_reports(){
		$this->db->select('*');
		$this->db->from('tbl_counter');
		$query = $this->db->get();
		return $query->result();
	}
	public function ajax_report_detail(){
		$this->db->select('*');
		$this->db->from('tbl_lms_concern');
		$this->db->where('status','1');
		$query = $this->db->get();
		return $query->result();
	}
	public function ajax_display_data(){
		$id = $this->input->post('id');
		$this->db->select('*');
		$this->db->from('tbl_lms_concern');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result();
	}
	public function ajax_replay_report(){
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$text = $this->input->post('text');

		$update = array(
			'response' =>$text,
			'responded_by' =>$name
		);
		$this->db->where('id',$id);
		$result = $this->db->update('tbl_lms_concern',$update);
		return $result;  
	}
	public function ajax_solve_report(){
		$id = $this->input->post('id');
		$report = 0;

		$this->db->select('*');
		$this->db->from('tbl_counter');
		$this->db->where('id','1');
		$query = $this->db->get();
		if($query->num_rows() != 0){
	      foreach ($query->result() as $value){
	      	$report = $value->report;
	      }
	  	}


		$update1 = array(
			'status' => '0',
		);
		$new = $report - 1;
		$update2 = array(
			'report'=> $new
		);
		$this->db->where('id','1');
		$this->db->update('tbl_counter',$update2);

		$this->db->where('id',$id);
		$result = $this->db->update('tbl_lms_concern',$update1);
		return $result;  
	}

	public function ajax_save_solution(){
		$id = $this->input->post('id');
		$text = $this->input->post('text');

		$update = array(
			'solution' => $text 
		);
		$this->db->where('id',$id);
		$result = $this->db->update('tbl_lms_concern',$update);
		return $result;
	}
	public function ajax_history_reports(){
		$this->db->select('*');
		$this->db->from('tbl_lms_concern');
		$this->db->where('status','0');
		$query = $this->db->get();
		return $query->result();
	}
	public function ajax_latest_activity(){
		$this->db->select('*');
		$this->db->from('tbl_lms_post');
		$this->db->join('tbl_class','tbl_lms_post.user_id = tbl_class.class_code','left');
		$this->db->where('tbl_lms_post.type >=','1');
		$this->db->where('tbl_lms_post.acept','0');
		$this->db->order_by('tbl_lms_post.id','DESC');
		$this->db->limit(30);
		$query = $this->db->get();
		return $query->result();
	}
	public function ajax_online_personel(){
		$this->db->select('*');
		$this->db->from('tbl_account');
		$this->db->where('status','1');
		$this->db->where('department >=','2');
		$this->db->where('department <=','3');
		$query = $this->db->get();
		return $query->result();
	}
	public function ajax_all_person(){
		$this->db->select('*');
		$this->db->from('tbl_account');
		$this->db->where('status','1');
		$this->db->where('department >=','2');
		$query = $this->db->get();
		return $query->result();
	}
	public function ajax_comment(){
		$id = $this->input->post('id');
		$message = $this->input->post('message');
		$name = $this->input->post('name');
		$profile = $this->input->post('profile');
		$user_id = $this->input->post('user_id');

		$this->db->select('*');
	 	$this->db->from('tbl_lms_post');
	 	$this->db->where('post_id',$id);
	 	$query = $this->db->get();
	 	$com=0;
	 	if($query->num_rows() != 0){
	       foreach ($query->result() as $value){
	 		$com = $value->comment;
	 		}
	 	}
	 	$add = $com + 1;
	 	$update  = array(
	 		'comment' => $add 
	 	);
	 	$this->db->where('post_id',$id);
	 	$this->db->update('tbl_lms_post',$update);

		$insert  = array(
			'user_id'=>$user_id,
			'name' => $name,
			'post_id' => $id,
			'comment' => $message,
			'profile' => $profile 
		);
		$result = $this->db->insert('tbl_lms_comment',$insert);
		return $result;
	}
	public function ajax_delete(){
		$id = $this->uri->segment(3);
		$this->db->where('post_id',$id);
		$result = $this->db->delete('tbl_lms_post');
		return $result;
	}
	public function chat_user(){
		$id=$this->input->post('id');
		$this->db->select("*");
		$this->db->from('tbl_lms_chat');
		$this->db->where('sender',$id);
		$this->db->where('status','1');
		$query = $this->db->get();
		return $query->result();
	}
	public function user_sent(){
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$profile=$this->input->post('profile');
		$userid = $this->input->post('userid');
		$text = $this->input->post('text');
		$insert = array(
			'chat_code' => $id,
			'message' =>$text,
			'name'=>$name,
			'profile'=>$profile,
			'sent_id'=>$userid,
			'status'=>'0' 
		);
		$result = $this->db->insert('tbl_lms_msg',$insert);
		return $result;
	}
	public function toggle($data){
		$id= $this->input->post('id');
		$update  = array(
			'acept' => $data 
		);
		$this->db->where('post_id',$id);
		$result = $this->db->update('tbl_lms_post',$update);
		return $result;
	}
	//--- show student enrollled class
	public function show_class(){
		$id = $this->input->post('id');
		$this->db->select('*');
		$this->db->from('tbl_class');
		$this->db->join('tbl_class_student','tbl_class_student.class_code = tbl_class.class_code','right');
		$this->db->where('tbl_class_student.student_id',$id);
		$this->db->where('tbl_class.act_sem','0');
		$query = $this->db->get();
		return $query->result();
	}
	//--- end here
	public function class_join(){
		$student_id = $this->input->post('id');
		$code = $this->input->post('class_code');

		$req = 0;
		$this->db->select('*');
		$this->db->from('tbl_class');
		$this->db->where('class_subject',$code);
		$query = $this->db->get();
		if($query->num_rows() != 0){
	      foreach ($query->result() as $value){
	      	$req = $value->request;
	      }
	  	}
	  	$newreq = $req + 1;
	  	$update = array(
	  		'request' =>$newreq 
	  	);
	  	$this->db->where('class_code',$code);
	  	$this->db->update('tbl_class',$update);

		$insert = array(
			'student_id' => $student_id,
			'class_code' => $code,
			'status' =>'0' 
		);

		$result = $this->db->insert('tbl_class_student',$insert);
		return $result;
	}
	public function cancel_join_class(){
		$id = $this->input->post('id');
		$code = $this->input->post('code');

		$req = 0;
		$this->db->select('*');
		$this->db->from('tbl_class');
		$this->db->where('class_code',$code);
		$query = $this->db->get();
		if($query->num_rows() != 0){
	      foreach ($query->result() as $value){
	      	$req = $value->request;
	      }
	  	}
	  	$newreq = $req - 1;
	  	$update = array(
	  		'request' =>$newreq 
	  	);
	  	$this->db->where('class_code',$code);
	  	$this->db->update('tbl_class',$update);

	  	$this->db->where('id',$id);
	  	$result = $this->db->delete('tbl_class_student');
		return $result;	
	}
	//--- delete [ajax_folder_del,ajax_accountDelete ]
	public function delete($data, $field, $table){
		$this->db->where($field,$data);
		$result = $this->db->delete($table);
		return $result;
	}
	//--- end here
	//--- change password of students and admin/ registrar
	public function changepass(){
		$id = $this->input->post('id');
		$data = $this->input->post('stud_id');
		$data1 = bin2hex($data);
		$update = array(
			'password'=>$data1
		);
		$this->db->where('id',$id);
		$result = $this->db->update('tbl_account',$update);
		return $result;
	}
	//--- end here
	public function not_allow(){
		$id= $this->input->post('id');
		$stud =$this->input->post('stud');	
		
		$update  = array(
			'lms_acc' =>  '0'
		);
		$this->db->where('student_id',$stud);
		$this->db->update('tbl_master_list',$update);

		$update1 = array(
			'status'=>'0'
		);
		$this->db->where('id',$id);
		$result = $this->db->update('tbl_account',$update1);
		return $result;
	}	
		public function allow(){
		$id= $this->input->post('id');
		$stud =$this->input->post('stud');	
		
		$update  = array(
			'lms_acc' =>'1'
		);
		$this->db->where('student_id',$stud);
		$this->db->update('tbl_master_list',$update);

		$update1 = array(
			'status'=>'1'
		);
		$this->db->where('id',$id);
		$result = $this->db->update('tbl_account',$update1);
		return $result;
	}
	public function student_register(){
		$name = $this->input->post('name');
		$id = $this->input->post('id');
		$email = $this->input->post('email');
		$pass = $this->input->post('pass');
		$user = $this->input->post('user');
		$data1 = bin2hex($pass);

		$newid = '';
		$request = 0;
		$this->db->select('*');
		$this->db->from('tbl_master_list');
		$this->db->where('student_id',$id);
		$this->db->where('lms_acc','0');
		$query = $this->db->get();
		if($query->num_rows() != 0){
	      foreach ($query->result() as $value){
	      	$newid = $value->student_id;
	      }
	  	}
	  	$this->db->select('*');
		$this->db->from('tbl_counter');
		$this->db->where('id','1');
		$query = $this->db->get();
		if($query->num_rows() != 0){
	      foreach ($query->result() as $value){
	      	$request = $value->request;
	      }
	  	}

	  	$newreq = $request + 1;
	  	if($newid == ''){
	  		echo "Check Your Input ID";
	  	}
	  	else{


	  		$inserts  = array(
	  			'fullname'=> $name,
	  			'profile'=>'acc.png',
	  			'student_id'=>$id,
	  			'username'=>$user,
	  			'email'=>$email,
	  			'nickname'=>$user,
	  			'password'=>$data1, 
	  			'department'=>'1',
	  			'status'=>'2'
	  		);
	  		$this->db->insert('tbl_account',$inserts);

	  		$update1  = array(
	  			'request' => $newreq
	  		);
	  		$this->db->where('id','1');
	  		$this->db->update('tbl_counter',$update1);

	  		$update = array(
	  			'lms_acc' => '2'
	  		);
	  		$this->db->where('student_id',$id);
	  		$result = $this->db->update('tbl_master_list',$update);
	  		return $result;
	  		
	  	}
	}
	public function approve_student(){
		$student_id = $this->input->post('student_id');
		$section = $this->input->post('section');

		$request = 0;
		$student = 0;
		$this->db->select('*');
		$this->db->from('tbl_counter');
		$this->db->where('id','1');
		$query = $this->db->get();
		if($query->num_rows() != 0){
	      foreach ($query->result() as $value){
	      	$request = $value->request;
	      	$student = $value->student;
	      }
	  	}



	  	$stud = $student + 1;
	  	$newreq = $request - '1';
		$update1 = array(
			'cor_sec'=>$section,
			'status'=>'1'
		);
		$this->db->where('student_id',$student_id);
		$this->db->update('tbl_account',$update1);

		$update2 = array(
			'lms_acc'=>'1'
		);
		$this->db->where('student_id',$student_id);
		$this->db->update('tbl_master_list',$update2);

		$update3 = array(
			'request'=> $newreq,
			'student'=>$stud
			// 'request'=> $newreq
		);
		$this->db->where('id','1');
		$result = $this->db->update('tbl_counter',$update3);
		return $result;
	}
	public function reject_student(){
		$student_id = $this->input->post('student_id');
		$section = $this->input->post('section');

		$request = 0;
		$this->db->select('*');
		$this->db->from('tbl_counter');
		$this->db->where('id','1');
		$query = $this->db->get();
		if($query->num_rows() != 0){
	      foreach ($query->result() as $value){
	      	$request = $value->request;
	      }
	  	}

		$this->db->where('student_id',$student_id);
		$this->db->delete('tbl_account');

		$update2 = array(
			'lms_acc'=>'0'
		);
		$this->db->where('student_id',$student_id);
		$this->db->update('tbl_master_list',$update2);

		$newreq = $request - '1';
		$update3 = array(
			'request'=> $newreq
			// 'request'=> $newreq
		);
		$this->db->where('id','1');
		$result = $this->db->update('tbl_counter',$update3);
		return $result;
	}
	public function report_ok(){
		$id  =$this->input->post('id');
		$update = array(
			'status' =>'0' 
		);
		$this->db->where('id',$id);
		$this->db->update('tbl_lms_concern',$update);

		$concern = 0;
		$this->db->select('*');
		$this->db->from('tbl_counter');
		$this->db->where('id','1');
		$query = $this->db->get();
		if($query->num_rows() != 0){
	      foreach ($query->result() as $value){
	      	$concern = $value->concern;
	      }
	  	}
	  	$con = $concern - 1;
	  	$update1 = array(
	  		'concern' =>$con 
	  	);
	  	$this->db->where('id','1');
	  	$result = $this->db->update('tbl_counter',$update1);
	  	return $result;
	}
	public function view_request(){
		$code =$this->input->post('id');
		$this->db->select("*");
		$this->db->from('tbl_class_student');
		$this->db->join('tbl_account','tbl_account.student_id = tbl_class_student.student_id','right');
		$this->db->where('tbl_class_student.class_code',$code);
		$this->db->where('tbl_class_student.status','0');
		$query=$this->db->get();
		return $query->result();
	}
	public function ajax_approve_stud(){
		$id = $this->input->post('id');
		$code = $this->input->post('code');

		$update1 = array(
			'status'=>'1'
		);
		$this->db->where('student_id',$id);
		$this->db->where('class_code',$code);
		$this->db->update('tbl_class_student',$update1);

		$request = 0;
		$this->db->select('*');
		$this->db->from('tbl_class');
		$this->db->where('class_code',$code);
		$query = $this->db->get();
		if($query->num_rows() != 0){
	      foreach ($query->result() as $value){
	      	$request = $value->request;
	      }
	  	}
	  	$stud = 0;
		$this->db->select('*');
		$this->db->from('tbl_class');
		$this->db->where('class_code',$code);
		$query = $this->db->get();
		if($query->num_rows() != 0){
	      foreach ($query->result() as $value){
	      	$stud = $value->no_student;
	      }
	  	}
	  	$newstud = $stud + 1;
	  	$update2 = array(
	  		'no_student' =>$newstud
	  	);
	  	$this->db->where('class_code',$code);
	  	$this->db->update('tbl_class',$update2);

		$newreq = $request - '1';
		$update3 = array(
			'request'=> $newreq
		);
		$this->db->where('class_code',$code);
		$result = $this->db->update('tbl_class',$update3);
		return $result;
	}
	public function class_student_mem(){
		$code = $this->input->post('id');	
		$this->db->select("*");
		$this->db->from('tbl_class_student');
		$this->db->join('tbl_account','tbl_account.student_id = tbl_class_student.student_id','right');
		$this->db->where('tbl_class_student.class_code',$code);
		$this->db->where('tbl_class_student.status','1');
		$query=$this->db->get();
		return $query->result();
	}
	public function time_ol(){
		$id = $this->input->post('id');
		$date = date('Y-m-d H:i:s');
		$current_timestamp = strtotime(date("Y-m-d H:i:s") . '- 10 second');
      	$current_timestamp = date('Y-m-d H:i:s', $current_timestamp);
		$update = array(
			//'ol_date'=>$date,
			'ol_status'=>$current_timestamp
		);
			
		
		$this->db->where('id',$id);
		$result = $this->db->update('tbl_account',$update);
		return $result;
	}
	public function display_chat(){
		$class_id = $this->input->post('class_id');
		$this->db->select('*');
		$this->db->from('tbl_lms_msg');
		$this->db->join('tbl_account','tbl_account.id = tbl_lms_msg.sent_id','left');
		$this->db->where('tbl_lms_msg.chat_code',$class_id);
		$this->db->limit(20);
		$query=$this->db->get();
		return $query->result();
	}
	public function sent_msg(){
		$class = $this->input->post('class_id');
		$user = $this->input->post('user_id');
		$msg = $this->input->post('message');

		$update = array(
			'chat_code' =>$class,
			'sent_id'=>$user,
			'message'=>$msg 
		);
		$result =$this->db->insert('tbl_lms_msg',$update);
		return $result;
	}
	public function stud_rec_act(){
		$class = $this->input->post('id');
		$stud = $this->input->post('stud');
		$this->db->select('*');
		$this->db->from('tbl_lms_submit');
		$this->db->join('tbl_lms_post','tbl_lms_post.post_id = tbl_lms_submit.activity_code','right');
		$this->db->where('tbl_lms_submit.class_code',$class);
		$this->db->where('tbl_lms_submit.student_id',$stud);
		$query = $this->db->get();
		return $query->result();
	}
	public function delete_send(){
		$id = $this->input->post('id');
		$stud = $this->input->post('stud');
		$this->db->where('activity_code',$id);
		$this->db->where('student_id',$stud);
		$result =$this->db->delete('tbl_lms_submit');
		return $result;
	}
	public function ajax_class_submitFile(){
		$class = $this->input->post('class_code');
		$act_id = $this->input->post('id');

		$this->db->select('*');
		$this->db->from('tbl_account');
		$this->db->join('tbl_lms_submit', 'tbl_account.student_id = tbl_lms_submit.student_id', 'right');
		$this->db->where('tbl_lms_submit.class_code',$class);
		$this->db->where('tbl_lms_submit.activity_code',$act_id);
		$query = $this->db->get();
		return $query->result();
	}
	public function ajax_student_activity(){
		$class =$this->input->post('class_code');
		$this->db->select('*');
		$this->db->from('tbl_account');
		$this->db->join('tbl_class_student', 'tbl_account.student_id = tbl_class_student.student_id','left');
		$this->db->where('tbl_class_student.class_code',$class);
		$this->db->order_by('fullname');
		$query = $this->db->get();
		return $query->result();
	}
	public function ajax_files_rec(){
		$class = $this->input->post('class_code');
		$type = $this->input->post('type_mode');
		$this->db->select('*');
		$this->db->from('tbl_lms_post');
		$this->db->where('type',$type);
		$this->db->where('user_id',$class);
		$this->db->order_by('id','DESC');
		$query = $this->db->get();
		return $query->result();
	}
	public function ajax_allow_actShrt(){
		$id = $this->input->post('id');
		$update = array(
			'acept'=>'1'
		);
		$this->db->where('id',$id);
		$result = $this->db->update('tbl_lms_post',$update);
		return $result;
	}
	public function ajax_stud_submitRec(){
		$class = $this->input->post('class_code');
		$type = $this->input->post('type_mode');
		$stud = $this->input->post('stud_id');
		$this->db->select('*');
		$this->db->from('tbl_lms_submit');
		$this->db->join('tbl_lms_post', 'tbl_lms_submit.activity_code = tbl_lms_post.post_id','left');
		$this->db->where('tbl_lms_submit.class_code',$class);
		$this->db->where('tbl_lms_post.type',$type);
		$this->db->where('tbl_lms_submit.student_id',$stud);
		$this->db->order_by('tbl_lms_post.id','DESC');
		$query = $this->db->get();
		return $query->result();
	}
	public function ajax_input_grades(){
		$code = $this->input->post('code');
		$stud = $this->input->post('stud_id');
		$grades = $this->input->post('grades');
		
		$update = array(
			'raw_score'=>$grades
		);
		$this->db->where('activity_code',$code);
		$this->db->where('student_id',$stud);
		$result = $this->db->update('tbl_lms_submit',$update);
		return $result;
	}
	public function ajax_view_actMode(){
		$code = $this->input->post('class_code');
		$act = $this->input->post('code');
		$this->db->select('*');
		$this->db->from('tbl_class_student');
		$this->db->join('tbl_account','tbl_account.student_id = tbl_class_student.student_id','right');
		$this->db->join('tbl_lms_submit', 'tbl_lms_submit.student_id = tbl_class_student.student_id','left');
		$this->db->where('tbl_lms_submit.activity_code',$act);
		$this->db->where('tbl_class_student.class_code',$code);
		$this->db->order_by('tbl_account.fullname','asc');
		$query = $this->db->get();
		return $query->result();
	}
	public function ajax_displayRecords(){
		$id = $this->input->post('id');
		$this->db->select("*");
		$this->db->from('tbl_class_student');
		$this->db->join('tbl_class', 'tbl_class_student.class_code = tbl_class.class_code','left');
		$this->db->where('tbl_class_student.student_id',$id);
		$this->db->where('tbl_class_student.act_sem','0');
		$query = $this->db->get();
		return $query->result();
	}
	public function ajax_editFgrades(){
		$stud = $this->input->post('stud');
		$code = $this->input->post('code');

		$update = array(
			'grad_final'=>'1'
		);
		$this->db->where('student_id',$stud);
		$this->db->where('class_code',$code);
		$result = $this->db->update('tbl_class_student',$update);
		return $result;
	}
	public function ajax_editFgradesPassFinal(){
		$stud = $this->input->post('stud');
		$code = $this->input->post('code');
		$update = array(
			'f_grade'=>'75',
			'grad_final'=>'2'
		);
		$this->db->where('student_id',$stud);
		$this->db->where('class_code',$code);
		$result = $this->db->update('tbl_class_student',$update);
		return $result;
	}
	public function ajax_editFgradesFailedFinal(){
		$stud = $this->input->post('stud');
		$code = $this->input->post('code');
		$update = array(
			'grad_final'=>'2'
		);
		$this->db->where('student_id',$stud);
		$this->db->where('class_code',$code);
		$result = $this->db->update('tbl_class_student',$update);
		return $result;
	}
	public function ajax_studPrintInfo(){
		$id = $this->input->post('id');
		$this->db->select('*');
		$this->db->from('tbl_account');
		$this->db->where('student_id', $id);
		$query = $this->db->get();
		return $query->result();
	}
	public function ajax_studPrintSub(){
		$id = $this->input->post('id');
		$this->db->select('*');
		$this->db->from('tbl_class_student');
		$this->db->join('tbl_class', 'tbl_class_student.class_code = tbl_class.class_code', 'left');
		$this->db->where('tbl_class_student.student_id',$id);
		$query = $this->db->get();
		return $query->result();
	}
	public function ajax_filesDisplay(){
		$id = $this->input->post('id');
		$this->db->select('*');
		$this->db->from('tbl_lms_post');
		$this->db->join('tbl_account', 'tbl_lms_post.user_id = tbl_account.id', 'left');
		$this->db->join('tbl_lms_file', 'tbl_lms_post.post_id = tbl_lms_file.post_id', 'left');
		$this->db->where('tbl_account.department','3');
		$this->db->where('tbl_account.id',$id);
		$this->db->where('tbl_lms_post.type','0');
		$query = $this->db->get();
		return $query->result();
	}
	public function ajax_filesDisplayUserMode(){
		$this->db->select('*');
		$this->db->from('tbl_lms_post');
		$this->db->join('tbl_account', 'tbl_lms_post.user_id = tbl_account.id', 'left');
		$this->db->join('tbl_lms_file', 'tbl_lms_post.post_id = tbl_lms_file.post_id', 'left');
		$this->db->where('tbl_account.department >=','2');
		$this->db->where('tbl_lms_post.type','0');
		$query = $this->db->get();
		return $query->result();
	}
	public function view_submittedStudentFiles(){
		$post_id = $this->input->post('post_id');
		$section = $this->input->post('section');

		$this->db->select('*');
		$this->db->from('tbl_account');
		$this->db->join('tbl_lms_submit', 'tbl_account.student_id = tbl_lms_submit.student_id','right');
		$this->db->where('tbl_account.cor_sec',$section);
		$this->db->where('tbl_lms_submit.activity_code',$post_id);
		$query = $this->db->get();
		return $query->result();
	}
	public function send_request_form(){
		$name = $this->input->post('name');
		$id = $this->input->post('stud_id');
		$request = $this->input->post('request');

		$counter = 0;
		$this->db->select('*');
	 	$this->db->from('tbl_counter');
	 	$this->db->where('id','1');
	 	$query = $this->db->get();
	 	if($query->num_rows() != 0){
	       foreach ($query->result() as $value){
	 		$counter = $value->concern;
	 		}
	 	}
	 	$count = $counter + 1;
	 	$update = array(
	 		'concern'=>$count
	 	);
	 	$this->db->where('id','1');
	 	$this->db->update('tbl_counter',$update);

		$insert = array(
			'name' => $name,
			'student_id'=>$id,
			'title'=>'Request for: '.$request,
			'concern'=> 'Good day Sir/Ma am I '.$name.' would like to request '.$request. ' thank you and Godbless.',
			'status'=>'1'
		);
		$result = $this->db->insert('tbl_lms_concern',$insert);
		return $result;
	}
	public function ajax_allPerson_stud(){
		$this->db->select('*');
		$this->db->from('tbl_account');
		$this->db->where('status','1');
		$this->db->where('department >=','1');
		$this->db->order_by('department','DESC');
		$this->db->limit(20);
		$query = $this->db->get();
		return $query->result();
	}

	//pagination code sample try
	public function getData($rowno,$rowperpage) {
	    $this->db->select('*');
	    $this->db->from('tbl_account');
	    $this->db->where('department','1');
	    $this->db->limit($rowperpage, $rowno);  
	    $query = $this->db->get();
	    return $query->result_array();
	  }

	  // Select total records
	  public function getrecordCount() {
	    $this->db->select('count(*) as allcount');
	    $this->db->from('tbl_account');
	    $this->db->where('department','1');
	    $query = $this->db->get();
	    $result = $query->result_array();
	    return $result[0]['allcount'];
	  }
	  public function getData2($rowno,$rowperpage) {
	    $this->db->select('*');
	    $this->db->from('tbl_master_list');
	    $this->db->where('status','0');
	    $this->db->order_by('lms_acc','DESC');
		$this->db->order_by('sec_year');
		$this->db->order_by('student_name');
	    $this->db->limit($rowperpage, $rowno);  
	    $query = $this->db->get();
	    return $query->result_array();
	  }

	  // Select total records
	  public function getrecordCount2() {
	    $this->db->select('count(*) as allcount');
	    $this->db->from('tbl_master_list');
	    $this->db->where('status','0');
	    $this->db->order_by('lms_acc','DESC');
		$this->db->order_by('sec_year');
		$this->db->order_by('student_name');
	    $query = $this->db->get();
	    $result = $query->result_array();
	    return $result[0]['allcount'];
	  }
	  //--- admin registrar
	  public function ajax_addInstructor(){
	  	$last = $this->input->post('last');
	  	$name = $this->input->post('name');
	  	$mi = $this->input->post('mi');
	  	$id = $this->input->post('id');
	  	$post = $this->input->post('post');
	  	$pass = bin2hex($id);
	  	$f_name = $name .' '.$mi.' '.$last;
	  	$insertData = array(
	  		'fullname' =>$f_name,
	  		'nickname'=>$name,
	  		'student_id'=>$id,
	  		'profile'=>'acc.png',
	  		'username'=>$id,
	  		'password'=>$pass,
	  		'department'=>$post,
	  		'status'=>'1' 
	  	);
	  	$result = $this->db->insert('tbl_account',$insertData);
	  	return $result;
	  }
	  //--- end here
	  //--- display the class accoumt
	  public function ajax_class_list(){
	  	$id = $this->input->post('id');
	  	$this->db->select('*');
	  	$this->db->from('tbl_class');
	  	$this->db->where('admin_id',$id);
	  	$this->db->where('act_sem','0');
	  	$query = $this->db->get();
	  	return $query->result();
	  }
	  //--- end here
	  public function ajax_classStudent(){
	  	$class=$this->input->post('class_code');
	  	$this->db->select('*');
	  	$this->db->from('tbl_class_student');
	  	$this->db->join('tbl_account', 'tbl_class_student.student_id = tbl_account.student_id','right');
	  	$this->db->where('tbl_class_student.class_code',$class);
	  	$this->db->order_by('tbl_account.fullname');
	  	$query = $this->db->get();
	  	return $query->result();
	  }
	  //--display submitted by the students
	  public function ajax_display_submitted(){
	  	$student_id = $this->input->post('id');
	  	$code = $this->input->post('class_code');
	  	$type = $this->input->post('type');
	  	$this->db->select('*');
	  	$this->db->from('tbl_lms_post');
	  	$this->db->join('tbl_lms_submit','tbl_lms_post.post_id = tbl_lms_submit.activity_code','right');
	  	$this->db->where('tbl_lms_post.type',$type);
	  	$this->db->where('tbl_lms_post.user_id',$code);
	  	$this->db->where('tbl_lms_submit.student_id',$student_id);
	  	$query = $this->db->get();
	  	return $query->result();
	  }
	  //---end here
	  public function ajax_views_recs(){
	  	$class = $this->input->post('class_code');
	  	$type = $this->input->post('type');
		$this->db->select('*');
		$this->db->from('tbl_lms_post');
		$this->db->join('tbl_lms_file', 'tbl_lms_post.post_id = tbl_lms_file.post_id','right');
		$this->db->where('tbl_lms_post.user_id', $class);
		$this->db->where('tbl_lms_post.type',$type);
		$this->db->order_by('tbl_lms_post.id');
		$query = $this->db->get();
		return $query->result();
	}
	public function ajax_delete_mod(){
		$post_id = $this->input->post('post_id');
		$this->db->where('post_id',$post_id);
		$this->db->delete('tbl_lms_post');
		$this->db->where('post_id',$post_id);
		$result = $this->db->delete('tbl_lms_file');
		return $result;
	}
	//---create folder
	public function ajax_create_folder(){
		$name = $this->input->post('name');
		$loc = $this->input->post('location');
		$n = 12;
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
		$folder_id = ''; 
		    for ($i = 0; $i < $n; $i++) { 
		        $index = rand(0, strlen($characters) - 1); 
		        $folder_id .= $characters[$index]; 
		    } 	
		$insert = array(
			'location_code' => $loc,
			'folder_code'=>$folder_id,
			'folder_name'=>$name 
		);
		$result = $this->db->insert('tbl_folder',$insert);
		return $result;
	}
	//--- end here
	//--- saving links
	public function ajax_save_link(){
		$name = $this->input->post('name');
		$link = $this->input->post('link');
		$id = $this->input->post('id'); 
		$n = 12;
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
		$post_id = ''; 
		    for ($i = 0; $i < $n; $i++) { 
		        $index = rand(0, strlen($characters) - 1); 
		        $post_id .= $characters[$index]; 
		    }
		 $insert = array(
		 	'post_id' => $post_id,
		 	'folder_code'=>$id,
		 	'file'=>$name,
		 	'link'=>$link,
		 	'file_ext'=>'link' 
		 );
		 $result = $this->db->insert('tbl_lms_file',$insert);
		 return $result;
	}
	//--- end here
	//--- look for all person inside he system and also have query for search
	public function ajax_allshareUser(){
		$name = $this->input->post('name');
		$this->db->select('*');
		$this->db->from('tbl_account');
		if($name != ''){
			  $this->db->like('fullname', $name);
			  $this->db->or_like('nickname', $name);
		  }
		$this->db->limit(5);
		$this->db->order_by('id','random');
		$query = $this->db->get();
		return $query->result();
	}
	//--- end here
	//--- share folder here confirm the process
	public function ajax_share_confirm(){
		$opt = $this->input->post('opt');
		if($opt == '0'){
			$location_code = $this->input->post('id');
			$folder_code = $this->input->post('folder');
			$folder_name = $this->input->post('name');

			$insert = array(
				'location_code' => $location_code,
				'folder_code'=>$folder_code,
				'folder_name'=>$folder_name.' SHARED' 
			);
			$result = $this->db->insert('tbl_folder',$insert);
			return $result;
		}
		else{
			$post = $this->input->post('post');
			$file = $this->input->post('file');
			$link = $this->input->post('link');
			$ext = $this->input->post('ext');
			$id = $this->input->post('id');
			$insert = array(
				'folder_code' => $id,
				'post_id'=>$post,
				'file'=>$file,
				'link'=>$link,
				'file_ext'=>$ext 
			);
			$result = $this->db->insert('tbl_lms_file',$insert);
			return $result;
		}
	}
	//--- end here
	//--- allow all users register to access PLMS
	public function ajax_allow_all(){
		$update = array(
			'status' => '1'
		);
		$this->db->where('status','0');
		$this->db->where('department','1');
		$result = $this->db->update('tbl_account',$update);
		return $result;
	}
	//--- end here
	//--- disallow all acccount to login
	public function ajax_disallow_all(){
		$update = array(
			'status' => '0'
		);
		$this->db->where('status','1');
		$this->db->where('department','1');
		$result = $this->db->update('tbl_account',$update);
		return $result;	
	}
	//--- end here
	//--- full query of calendar
	public function fetch_all_event(){
	  	$this->db->order_by('id');
	  	$this->db->where('user_id','1');
	  	return $this->db->get('tbl_event');
	}
	//--- insert event
	//--- fetch event individual
	public function fetch_event(){
		$id = $this->uri->segment(3);
		$this->db->order_by('id');
	  	$this->db->where('user_id',$id);
	  	return $this->db->get('tbl_event');	
	}
	//--- end here
	public function insert_event($data)
	 {
	  	$this->db->insert('tbl_event', $data);
	 }

	public function update_event($data, $id)
	 {
	  	$this->db->where('id', $id);
	  	$this->db->update('tbl_event', $data);
	 }

	public function delete_event($id)
	 {
	  	$this->db->where('id', $id);
	  	$this->db->delete('tbl_event');
	 }
	//--- end here

	//--- checking ng attemp ng student sa pag take ng online exam, activity, quiz
	public function ajax_attemp(){
		$code = $this->input->post('code');
		$id = $this->input->post('id');
		$this->db->select('*');
		$this->db->from('tbl_lms_submit');
		$this->db->where('student_id',$id);
		$this->db->where('activity_code',$code);
		$query = $this->db->get();
		return $query->result();
	}
	//--- end here
	//--- first attemp
	public function first_attemp(){
		$student_id = $this->input->post('id');
		$post_id = $this->input->post('post_id');
		$class_code = $this->input->post('class_code');
		$type = $this->input->post('type');
		$time = $this->input->post('time'); 
		$total = $this->input->post('total');
		$insert = array(
			'activity_code' => $post_id,
			'type'=>$type,
			'online'=>'1',
			'attemp'=>'1',
			'time'=>$time,
			'class_code'=>$class_code,
			'student_id'=>$student_id,
			'total'=>$total,
			'file'=>'TAKEN ONLINE'
		);
		$result = $this->db->insert('tbl_lms_submit',$insert);
		return $result;	
	}
	//--- end here
	//--- next attemp
	public function next_attemp(){
		$id = $this->input->post('id');
		$attemp = $this->input->post('attemp');

		$student_id = $this->input->post('stud');
		$post_id = $this->input->post('post_id');
		$class_code = $this->input->post('class_code');
		$update = array(
			'answer'=>'',
			'point'=>'0',
			'to_check' =>'0'  
		);
		$this->db->where('class_code',$class_code);
		$this->db->where('question_id',$post_id);
		$this->db->where('student_id',$student_id);
		$this->db->update('tbl_answer',$update);

		$new = $attemp + 1;
		$update = array(
			'attemp' => $new,
			'online'=>'1',
			'file'=>'TAKEN ONLINE'
		);
		$this->db->where('id',$id);
		$result = $this->db->update('tbl_lms_submit',$update);
		return $result;
	}
	//--- end here
	//--- generate the question and save in the database
	public function first_generate(){
		$student_id = $this->input->post('stud');
		$post_id = $this->input->post('post_id');
		$class_code = $this->input->post('class_code');

		$this->db->select('*');
	 	$this->db->from('tbl_question');
	 	$this->db->where('question_id',$post_id);
	 	$query = $this->db->get();
	 	if($query->num_rows() != 0){
	       foreach ($query->result() as $value){
	 		$id = $value->id;
		 		$insert = array(
		 			'class_code' => $class_code,
		 			'student_id' => $student_id,
		 			'raw_id'=> $id,
		 			'question_id'=>$post_id
		 		);
		 		$this->db->insert('tbl_answer',$insert);	
	 		}
	 	}
	 	$this->db->select('*');
	 	$this->db->from('tbl_question');
	 	$this->db->where('question_id',$post_id);
	 	$query = $this->db->get();
	 	return $query->result();
	}
	//--- end here
	//--- generate question \
	public function generate_question(){
		$student_id = $this->input->post('stud');
		$post_id = $this->input->post('post_id');
		$class_code = $this->input->post('class_code');
		$this->db->select('*');
	 	$this->db->from('tbl_answer');
	 	$this->db->join('tbl_question','tbl_question.id = tbl_answer.raw_id','left');
	 	$this->db->where('tbl_answer.student_id', $student_id);
	 	$this->db->where('tbl_answer.question_id',$post_id);
	 	$query = $this->db->get();
	 	return $query->result();
	}
	//--- end here
	//--- correct answer plus point
	public function answer_question(){
		$answer = $this->input->post('answer');
		$code = $this->input->post('code'); 
		$stud_id = $this->input->post('stud_id');
		$id = $this->input->post('id');
		$ans = $this->input->post('ans');
		$update = array(
			'answer' => $ans,
			'point' =>'1' 
		);
		$this->db->where('raw_id',$id);
		$this->db->where('question_id',$code);
		$this->db->where('student_id',$stud_id);
		$result = $this->db->update('tbl_answer',$update);
		return $result;


	}
	//--- end here
	//--- wrong answer
	public function answerWrong_question(){
		$answer = $this->input->post('answer');
		$code = $this->input->post('code'); 
		$stud_id = $this->input->post('stud_id');
		$id = $this->input->post('id');
		$ans = $this->input->post('ans');
		$update = array(
			'answer' => $ans,
			'point' =>'0' 
		);
		$this->db->where('raw_id',$id);
		$this->db->where('question_id',$code);
		$this->db->where('student_id',$stud_id);
		$result = $this->db->update('tbl_answer',$update);
		return $result;
	}
	//--- end here
	//--- save long answer
	public function saveLong_answer(){
		$answer = $this->input->post('answer');
		$id = $this->input->post('id');
		$code = $this->input->post('code');
		$stud_id = $this->input->post('stud_id');
		$update = array(
			'answer' => "Answer: ".$answer,
			'to_check' =>'1' 
		);
		$this->db->where('raw_id',$id);
		$this->db->where('question_id',$code);
		$this->db->where('student_id',$stud_id);
		$result = $this->db->update('tbl_answer',$update);
		return $result;
	}
	//--- end here
	//--- save all activity
	public function save_allAnswer(){
		$code = $this->input->post('code');
		$stud_id = $this->input->post('stud_id');
		$this->db->select('*');
		$this->db->from('tbl_answer');
		$this->db->where('student_id',$stud_id);
		$this->db->where('question_id',$code);
		$query = $this->db->get();
		return $query->result();
	}
	//--- end here
	//--- finalize all records
	public function finalize_record(){
		$total = $this->input->post('total');
		$wrong = $this->input->post('wrong');
		$right = $this->input->post('right');
		$to_chk = $this->input->post('to_chk');
		$code = $this->input->post('code');
		$stud_id = $this->input->post('stud_id');
		$update = array(
			'to_chk' => $to_chk,
			'wrongAns'=>$wrong,
			'raw_score'=>$right
			// 'total' =>$total
		);
		$this->db->where('student_id',$stud_id);
		$this->db->where('activity_code',$code);
		$result = $this->db->update('tbl_lms_submit',$update);
		return $result;
	}
	//--- end here
	//--- quit the class
	public function ajax_quitSub(){
		$stud = $this->input->post('stud');
		$class = $this->input->post('clas');
		$update = array(
			'status' => '2'//hold for confirmation and records of instructors 
		);
		$this->db->where('student_id',$stud);
		$this->db->where('class_code',$class);
		$result = $this->db->update('tbl_class_student',$update);
		return $result;
	}
	//--- end here
	//--- check the student answer
	public function check_student(){
		$stud = $this->input->post('stud');
		$act = $this->input->post('act');
		$this->db->select('*');
		$this->db->from('tbl_answer');
	 	$this->db->join('tbl_question','tbl_question.id = tbl_answer.raw_id','left');
		$this->db->where('tbl_answer.question_id',$act);
		$this->db->where('tbl_answer.student_id',$stud);
		$this->db->where('tbl_answer.to_check','1');
		$query =$this->db->get();
		return $query->result();
	}
	//--- end here
	//--- pointing score to the students
	public function ajax_point_score(){
		$point = $this->input->post('point');
		$stud = $this->input->post('stud');
		$act = $this->input->post('act');
		$raw = $this->input->post('raw');
		$update = array(
			'point' => $point 
		);
		$this->db->where('question_id', $act);
		$this->db->where('student_id', $stud);
		$this->db->where('raw_id', $raw);
		$result = $this->db->update('tbl_answer',$update);
		return $result;
	}
	//--- end here
	//--- delete all the records
	public function delete_activity(){
		$post_id = $this->input->post('id');

		$this->db->where('question_id',$post_id);
		$this->db->delete('tbl_answer');

		$this->db->where('question_id',$post_id);
		$this->db->delete('tbl_question');
		
		$this->db->where('activity_code',$post_id);
		$this->db->delete('tbl_lms_submit');
		
		$this->db->where('post_id',$post_id);
		$result = $this->db->delete('tbl_lms_post');
		return  $result;
	}
	//--- end here
	//--- saving the quarter
	public function save_quarter(){
		$post_id = $this->input->post('post_id');
		$quarter = $this->input->post('quarter');
		$type = $this->input->post('type'); 
		$update = array(
			'quarter' => $quarter,
			'record_type' => $type 
		);
		$this->db->where('post_id',$post_id);
		$result = $this->db->update('tbl_lms_post',$update);
		return $result;
	}
	//--- end here
	//--- grades_title
	public function grades_title(){
		$type = $this->input->post('type');
		$class_code = $this->input->post('class_code');
		$this->db->select('*');
		$this->db->from('tbl_lms_post');
		$this->db->where('record_type',$type);
		$this->db->where('user_id',$class_code);
		$this->db->order_by('id','asc');
		$query = $this->db->get();
		return $query->result();
	}
	//--- end here
	//--- loading the title
	public function display_gradeTitle(){
		$code = $this->input->post('code');
		$this->db->select('*');
		$this->db->from('tbl_class');
		$this->db->where('class_code',$code);
		$query = $this->db->get();
		return $query->result();
	}
	//--- end here
	//--- loading the student grades
	public function studentGrades(){
		$code = $this->input->post('code');
		$this->db->select('*');
		$this->db->from('tbl_class_student');
		$this->db->join('tbl_account','tbl_account.student_id = tbl_class_student.student_id','right');
		$this->db->where('tbl_class_student.class_code',$code);
		$this->db->order_by('tbl_account.fullname','asc');
		$query = $this->db->get();
		return $query->result();
	}
	//--- end here
	//--- load the score 
	public function load_totalScore(){
		$code = $this->input->post('code');
		$type = $this->input->post('type');
		$quart = $this->input->post('quar');
		$this->db->select('*');
		$this->db->from('tbl_lms_post');
		$this->db->where('user_id',$code);
		$this->db->where('quarter',$quart);
		$this->db->where('record_type',$type);
		$query = $this->db->get();
		return $query->result();
	}
	//--- end here
	//--- load the student score
	public function load_totalStud(){
		$code = $this->input->post('code');
		$type = $this->input->post('type');
		$quart = $this->input->post('quar');
		$stud = $this->input->post('stud');
		$this->db->select('*');
		$this->db->from('tbl_lms_submit');
		$this->db->join('tbl_lms_post', 'tbl_lms_post.post_id = tbl_lms_submit.activity_code', 'right');
		$this->db->where('tbl_lms_submit.student_id',$stud);
		$this->db->where('tbl_lms_post.user_id',$code);
		$this->db->where('tbl_lms_post.quarter',$quart);
		$this->db->where('tbl_lms_post.record_type',$type);
		$query = $this->db->get();
		return $query->result();
	}
	//--- end here
	//--- saving student grades
	public function saving_grades(){
		$code = $this->input->post('code');
		$type = $this->input->post('type');
		$quart = $this->input->post('quar');
		$stud = $this->input->post('stud');
		$score =$this->input->post('score');
		$num = '';
		if($quart == '1st' || $quart == '3rd' ){
			if($type == 'WW'){
				$num = 'ww1';
			}
			else if($type == 'PT'){
				$num = 'pt1';
			}
			else{
				$num = 'a1';
			}
		}
		else if($quart == '2nd' || $quart == '4th'){
			if($type == 'WW'){
				$num = 'ww2';
			}
			else if($type == 'PT'){
				$num = 'pt2';
			}
			else{
				$num = 'a2';
			}
		}
		$update = array(
			$num => $score 
		);
		$this->db->where('student_id',$stud);
		$this->db->where('class_code',$code);
		$result = $this->db->update('tbl_class_student',$update);
		return $result;
	}
	//--- end here
	//--- saving the transmuted grades
	public function transmuted_grades(){
		$stud = $this->input->post('stud');
		$quarter = $this->input->post('quarter');
		$code = $this->input->post('code');
		$trans = $this->input->post('trans');
		$update = array(
			$quarter => $trans 
		);
		$this->db->where('student_id',$stud);
		$this->db->where('class_code',$code);
		$result = $this->db->update('tbl_class_student',$update);
		return $result;
	}
	//--- ens here
	//--- input the fn grades to FN1
	public function input_fn_grades(){
		$code = $this->input->post('code');
		$stud = $this->input->post('stud');
		$grade = $this->input->post('grade');

		$update = array(
			'FN1' => $grade 
		);
		$this->db->where('class_code',$code);
		$this->db->where('student_id',$stud);
		$result = $this->db->update('tbl_class_student',$update);
		return $result;
	}
	//--- end here
	//--- input the fn grades to registrar
	public function send_registrar(){
		$code = $this->input->post('code');
		$stud = $this->input->post('stud');
		$grade = $this->input->post('grade');

		$update = array(
			'f_grade' => $grade 
		);
		$this->db->where('class_code',$code);
		$this->db->where('student_id',$stud);
		$result = $this->db->update('tbl_class_student',$update);
		return $result;
	}
	//--- end here
	//--- adding student attemp
	public function add_attemp(){
		$act = $this->input->post('act');
		$stud = $this->input->post('stud');

		$update = array(
			'attemp' => '1' 
		);
		$this->db->where('student_id',$stud);
		$this->db->where('activity_code',$act);
		$result = $this->db->update('tbl_lms_submit',$update);
		return $result;
	}
	//--- end here
	//--- view the information of the class
	public function display_class_info(){
		$code = $this->input->post('code');
		$this->db->select('*');
		$this->db->from('tbl_class');
		$this->db->where('class_code',$code);
		$query = $this->db->get();
		return $query->result();
	}
	//--- end here
	//--- saving link for class
	public function add_link(){
		$code = $this->input->post('code');
		$sched = $this->input->post('sched');
		$link = $this->input->post('link');
		$insert = array(
			'link' => $link,
			'title' => $sched,
			'class_code'=>$code 
		);
		$result = $this->db->insert('tbl_lms_link',$insert);
		return $result;
	}
	//--- end here
	//--- view the link
	public function view_links(){
		$code = $this->input->post('code');
		$this->db->select('*');
		$this->db->from('tbl_lms_link');
		$this->db->where('class_code',$code);
		$this->db->order_by('id','DESC');
		$this->db->limit(5);
		$query = $this->db->get();
		return $query->result();
	}
	//--- end here
	//--- viewing the whole grades of student
	public function student_gradesGraph(){
		$this->db->select('*');
		$this->db->from('tbl_class_student');
		$query = $this->db->get();
		return $query->result();
	}
	//--- end here
	//--- to count all files
	public function count_allFiles(){
		$this->db->select('*');
		$this->db->from('tbl_lms_file');
		$query = $this->db->get();
		return $query->result();
	}
	//--- end here
	//--- update status into 1 and wont be seen
	public function delete_masterlist(){
		$name = $this->input->post('name');

		$update2 = array('up_date' => '1');
		$this->db->where('department','1');
		$this->db->update('tbl_account',$update2);

		$update = array(
			'lms_acc' => '0', 
			'status' => '1',
			'year_end'=>$name 
		);
		$this->db->where('status','0');
		$result = $this->db->update('tbl_master_list',$update);
		return $result;
	}
	//--- end here
	//--- updating
	public function updating_stud(){
		$stud = $this->input->post('stud');
		$update = array(
			'lms_acc' => '1' 
		);
		$this->db->where('student_id',$stud);
		$this->db->update('tbl_master_list',$update);

		$this->db->where('student_id',$stud);
		$this->db->where('status','0');
		$get = $this->db->get('tbl_master_list');
		return $get->result();
	} 
	//--- end here
	//--- updating studen account
	public function updating_studAccount(){
		$stud = $this->input->post('stud');
		$sect = $this->input->post('sect');

		$update = array(
			'cor_sec' => $sect,
			'up_date' => '0' 
		);
		$this->db->where('student_id',$stud);
		$result = $this->db->update('tbl_account',$update);
		return $result;
	}
	//--- end here
	//--- setting new sem
	public function newSem(){
		$sem = $this->input->post('sem');
		$update = array(
			'act_sem' => '1'
		);
		$sem = array(
			'semester' => $sem 
		);
		$this->db->where('act_sem','0');
		$this->db->update('tbl_class',$update);

		$this->db->where('act_sem','0');
		$this->db->update('tbl_class_student',$update);		

		$this->db->where('id','1');
		$result = $this->db->update('tbl_counter',$sem);	
		return $result;

	}
	//--- end here

//--- last ng pages
}