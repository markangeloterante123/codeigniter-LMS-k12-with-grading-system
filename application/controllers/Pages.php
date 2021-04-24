<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
	function  __construct() { 
        parent::__construct(); 
        $this->load->helper('download');
        $this->load->library('pagination');
		$this->load->library('excel');
		$this->load->helper('file');       
    }
	//lagoutsession
	public function logout(){	
		$id = $this->session->all_userdata();
     	$this->session->unset_userdata($id);
      	$this->session->sess_destroy();
      	redirect('pages/index');
	}
	//default pages
	public function index(){	
		$pages = 'homes';
		if(!file_exists(APPPATH.'views/home/'.$pages.'.php')){
	       show_404();
	    }
        $this->load->view('home/header');
		$this->load->view('home/'.$pages);
		$this->load->view('home/footer');
	}
	public function register(){
		$pages= $this->uri->segment('3');
		$this->load->view('home/'.$pages);
	}
	//for student
	public function usr(){
		$page=$this->uri->segment(3); 
		if(!file_exists(APPPATH.'views/admin/'.$page.'.php')){
             show_404();
         }
	    $this->load->view('user/header');
	    $this->load->view('user/side');
	    $this->load->view('user/'.$page);
	    $this->load->view('user/right');
	    $this->load->view('user/footer');
	}
	public function usr2(){
		$page=$this->uri->segment(3); 
		if(!file_exists(APPPATH.'views/admin/'.$page.'.php')){
             show_404();
         }
	    $this->load->view('user/header');
	    $this->load->view('user/side');
	    $this->load->view('user/'.$page);
	    $this->load->view('user/footer');
	}
	//for admin 
	public function adm(){
		$page=$this->uri->segment(3); 
		if(!file_exists(APPPATH.'views/admin/'.$page.'.php')){
             show_404();
         }
	    $this->load->view('admin/header');
	    $this->load->view('admin/side');
	    $this->load->view('admin/'.$page);
	    $this->load->view('admin/right');
	    $this->load->view('admin/footer');
	}
	public function adm2(){
		$page=$this->uri->segment(3); 
		if(!file_exists(APPPATH.'views/admin/'.$page.'.php')){
             show_404();
         }
	    $this->load->view('admin/header');
	    $this->load->view('admin/side');
	    $this->load->view('admin/'.$page);
	    $this->load->view('admin/footer');
	}
	
	public function reg(){
		$page=$this->uri->segment(3); 
		if(!file_exists(APPPATH.'views/registrar/'.$page.'.php')){
             show_404();
         }
	    $this->load->view('registrar/header');
	    $this->load->view('registrar/side');
	    $this->load->view('registrar/'.$page);
	    $this->load->view('registrar/right');
	    $this->load->view('registrar/footer');
	}
	public function reg2(){
		$page=$this->uri->segment(3); 
		if(!file_exists(APPPATH.'views/registrar/'.$page.'.php')){
             show_404();
         }
	    $this->load->view('registrar/header');
	    $this->load->view('registrar/side');
	    $this->load->view('registrar/'.$page);
	    $this->load->view('registrar/footer');
	}
	public function view_class(){
		$data['class_code']=$this->uri->segment(3); 
		$page = 'class_info';
		if(!file_exists(APPPATH.'views/registrar/'.$page.'.php')){
             show_404();
         }
	   	$this->load->view('registrar/'.$page,$data);
	}
	public function forgotpass(){
		$name = $this->input->post('user');
		$id = $this->input->post('stud_id');

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
			'title'=>'Forgot Password',
			'concern'=>'I '.$name.' student id no. '.$id.' is requesting to change password into my student id for the reason i forgot my password.',
			'status'=>'1'
		);
		$this->db->insert('tbl_lms_concern',$insert);
		$pages='success_forgot';
		$this->load->view('errors/'.$pages);
	}
	public function send_request_form(){
		$data=$this->model_users->send_request_form();
	 	echo json_encode($data);	
	}
	public function student_register(){
		$data=$this->model_users->student_register();
	 	echo json_encode($data);
	}
	public function enterClassStudent(){
		$page = 'classRM';
		if(!file_exists(APPPATH.'views/user/'.$page.'.php')){
             show_404();
         }
        $data['class_code'] = $this->input->post('code');
        $data['section'] = $this->input->post('sec'); 
        $data['sub_code'] =  $this->input->post('sub');

	    $this->load->view('user/header');
	    $this->load->view('user/classSD',$data);
	    $this->load->view('user/'.$page,$data);
	    $this->load->view('user/classRH');
	    $this->load->view('user/footer');
	}
	//--- enter class
	public function enterClass(){
		$id = $this->uri->segment(3);
		$sec = $this->uri->segment(4);
		$cod = $this->uri->segment(5);

		$page = 'classRM';
		if(!file_exists(APPPATH.'views/admin/'.$page.'.php')){
             show_404();
         }
        $data['class_code'] = hex2bin($id);
        $data['section'] = hex2bin($sec);
        $data['sub_code'] = hex2bin($cod);
	    $this->load->view('admin/header');
	    $this->load->view('admin/classSD',$data);
	    $this->load->view('admin/'.$page,$data);
	    $this->load->view('admin/classRH');
	    $this->load->view('admin/footer');
	}
	//--- end here
	//--- online exam, quiz, activity,
	public function online_take(){
		$data['code'] = $this->uri->segment(3);
		$data['id'] = $this->uri->segment(4);
		$data['time']=$this->uri->segment(5);
		$data['total']=$this->uri->segment(6);
		$page = 'online';
		if(!file_exists(APPPATH.'views/user/'.$page.'.php')){
             show_404();
         }
        $this->load->view('user/'.$page,$data);
	}
	//--- end here
	//--- for grading system individual grading sya
	public function enterGrades(){
		$id = $this->uri->segment(3);
		$sec = $this->uri->segment(4);
		$cod = $this->uri->segment(5);
		$page = $this->uri->segment(6);
		// $page = 'grade';
		if(!file_exists(APPPATH.'views/admin/'.$page.'.php')){
             show_404();
         }
        $data['class_code'] = $id;
        $data['section'] = $sec;
        $data['sub_code'] = $cod;
        $data['class_codebin'] = bin2hex($id);
        $data['sectionbin'] = bin2hex($sec);
        $data['sub_codebin'] = bin2hex($cod);
	    $this->load->view('admin/'.$page,$data);
	}
	//--- end here
	public function upload_post(){
			$profile = $this->input->post('profile');
			$name = $this->input->post('name_post');
			$subject = $this->input->post('subject');
			$text = $this->input->post('textarea_post');
			$image_file = $this->input->post('image_file');
			$id = $this->input->post('user_id');
			$type = $this->input->post('type');
			$n = 9;
			$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
	    	$post_id = ''; 
		    for ($i = 0; $i < $n; $i++) { 
		        $index = rand(0, strlen($characters) - 1); 
		        $post_id .= $characters[$index]; 
		    } 
			
			$data = array(); 
        	$errorUploadType = $statusMsg = ''; 
             
            // If files are selected to upload 
            if(!empty($_FILES['files']['name']) && count(array_filter($_FILES['files']['name'])) > 0){ 
                $filesCount = count($_FILES['files']['name']); 
                for($i = 0; $i < $filesCount; $i++){ 
                    $_FILES['file']['name']     = $_FILES['files']['name'][$i]; 
                    $_FILES['file']['type']     = $_FILES['files']['type'][$i]; 
                    $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i]; 
                    $_FILES['file']['error']     = $_FILES['files']['error'][$i]; 
                    $_FILES['file']['size']     = $_FILES['files']['size'][$i]; 
                    
                    $file_ext = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
                    // File upload configuration 
                    $uploadPath = './assets/uploadPic/'; 
                    $config['upload_path'] = $uploadPath; 
                    $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|doc|docx|xls|xlsx|mp4|avi|pptx'; 
                    //$config['max_size']    = '100'; 
                    //$config['max_width'] = '1024'; 
                    //$config['max_height'] = '768'; 
                     
                    // Load and initialize upload library 
                    $this->load->library('upload', $config); 
                    $this->upload->initialize($config); 
                    
                    // Upload file to server 
                    if($this->upload->do_upload('file')){ 
                        // Uploaded file data 
                        $fileData = $this->upload->data(); 
                        $uploadData[$i]['file'] = $fileData['file_name'];
                        $uploadData[$i]['post_id'] = $post_id; 
                        $uploadData[$i]['file_ext'] = $file_ext;
                    }else{  
                        $errorUploadType .= $_FILES['file']['name'].' | ';  
                    } 
                } 
                 
                $errorUploadType = !empty($errorUploadType)?'<br/>File Type Error: '.trim($errorUploadType, ' | '):''; 
                if(!empty($uploadData)){ 
                    // Insert files data into the database 
                    $insert = $this->model_users->insert($uploadData);   
                }
            }

            $post = array(
            	'total'=>'100',
            	'user_id'=>$id,
            	'profile' => $profile,
            	'posted'=>$name,
				'post_id' =>$post_id,
				'title'=>$subject,
				'body'=>$text,
				'type'=>$type,
				'status'=>'1' 
			);
			$this->db->insert('tbl_lms_post',$post);
			$this->load->view('errors/success_process');

	}
	// public function classUpload(){

	// }
	public function download($fileName = NULL) {   
		   if ($fileName) {
		    $file = realpath ( "./assets/uploadPic/" ) . "\\" . $fileName;
		    // check file exists    
		    if (file_exists ( $file )) {
		     // get file content
		     $data = file_get_contents ( $file );
		     //force download
		     force_download ( $fileName, $data );
		    } else {
		     // Redirect to base url
		     redirect ( base_url () );
		    }
		}
	}
	public function download_file_submit($fileName = NULL) {   
		   if ($fileName) {
		    $file = realpath ( "./assets/submit_file/" ) . "\\" . $fileName;
		    // check file exists    
		    if (file_exists ( $file )) {
		     // get file content
		     $data = file_get_contents ( $file );
		     //force download
		     force_download ( $fileName, $data );
		    } else {
		     // Redirect to base url
		     redirect ( base_url () );
		    }
		}
	}
	public function download_masterlist($fileName = NULL) {   
		   if ($fileName) {
		    $file = realpath ( "./assets/files/" ) . "\\" . $fileName;
		    // check file exists    
		    if (file_exists ( $file )) {
		     // get file content
		     $data = file_get_contents ( $file );
		     //force download
		     force_download ( $fileName, $data );
		    } else {
		     // Redirect to base url
		     redirect ( base_url ('pages/reg/stud') );
		    }
		}
	}
	public function delete_post(){
		$data=$this->model_users->ajax_delete();
	 	$this->load->view('errors/success_load');
	}
	public function update(){
		$id   = $this->input->post('user_id');
		$name = $this->input->post('name_update');
		$email= $this->input->post('email_update');
		$nickname = $this->input->post('nick_update');
		$user = $this->input->post('user_update');
		$contact = $this->input->post('contact_update');
		$pass = bin2hex($this->input->post('pass_update'));

		$update = array(
			'fullname' =>$name,
			'email'=>$email,
			'username'=>$user,
			'nickname'=>$nickname,
			'password'=>$pass,
			'contact'=>$contact 
		);
		$update_post_name = array(
			'posted' =>$name  
		);
		$this->db->where('user_id',$id);
		$this->db->update('tbl_lms_post',$update_post_name);

		$update_comment_name = array(
			'name' =>$nickname  
		);
		$this->db->where('user_id',$id);
		$this->db->update('tbl_lms_comment',$update_comment_name);

		$this->db->where('id',$id);
		$this->db->update('tbl_account',$update);
	 	$this->load->view('errors/success_load');	
	}
	public function uploadProfile(){
		$id=$this->input->post('id_user_profile');
		if(isset($_FILES["image_file"]["name"])){
			
			$uploadPath = './assets/img/'; 
            $config['upload_path'] = $uploadPath;
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$this->load->library('upload',$config);
			$this->upload->initialize($config);

			if(!$this->upload->do_upload('image_file')){
				echo $this->upload->display_errors();
			}
			//else condition pag success
			else{
				$data = $this->upload->data();
				$name_file2 = $data["file_name"];

				$update1 = array(
					'profile'=>$name_file2,
				);

				$this->db->where('id',$id);
				$this->db->update('tbl_account',$update1);

				$this->db->where('user_id',$id);
				$this->db->update('tbl_lms_post',$update1);

				$this->db->where('user_id',$id);
				$this->db->update('tbl_lms_comment',$update1);

				$page="success_load"; 
			    $this->load->view('errors/'.$page);
				}
			}
		}
	//--- create class 
	public function createClass(){
		$id=$this->input->post('admin_id');
		$profile=$this->input->post('admin_profile');
		$name=$this->input->post('admin_name');
		$full =$this->input->post('admin_fullname');
		$subject =$this->input->post('subject');
		$subcode=$this->input->post('subcode');
		$section=$this->input->post('section');
		$unit = $this->input->post('unit');
		$sched = $this->input->post('schedule');
		$sem = $this->input->post('type_class');
		$ww = $this->input->post('ww');
		$pt = $this->input->post('pt');
		$qa = $this->input->post('qa');

		$n = 10;
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    	$classCode = ''; 
	    for ($i = 0; $i < $n; $i++) { 
	        $index = rand(0, strlen($characters) - 1); 
	        $classCode .= $characters[$index]; 
	    } 
		

		if(isset($_FILES["image_file"]["name"])){
			
			$uploadPath = './assets/background/'; 
            $config['upload_path'] = $uploadPath;
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$this->load->library('upload',$config);
			$this->upload->initialize($config);

			if(!$this->upload->do_upload('image_file')){
				$update1 = array(
					'courseBackground'=>'No Image',
					'admin_id'=>$id,
					'section_yr'=>$section,
					'class_code'=>$classCode,
					'class_subject'=>$subcode,
					'course'=>$subject,
					'nickname'=>$name,
					'admin'=>$full,
					'unit'=>$unit,
					'class_sched'=>$sched,
					'adminProfile'=>$profile,
					'ww'=>$ww,
					'pt'=>$pt,
					'qa'=>$qa,
					'sem'=>$sem,
					'status'=>'1'
				);
				$this->db->insert('tbl_class',$update1);
			}
			//else condition pag success
			else{
				$data = $this->upload->data();
				$name_file2 = $data["file_name"];

				$update1 = array(
					'courseBackground'=>$name_file2,
					'admin_id'=>$id,
					'section_yr'=>$section,
					'class_code'=>$classCode,
					'class_subject'=>$subcode,
					'course'=>$subject,
					'nickname'=>$name,
					'unit'=>$unit,
					'class_sched'=>$sched,
					'adminProfile'=>$profile,
					'admin'=>$full,
					'ww'=>$ww,
					'pt'=>$pt,
					'qa'=>$qa,
					'sem'=>$sem,
					'status'=>'1'
				);
				$this->db->insert('tbl_class',$update1);
				}
			}
		$page="success_load"; 
		$this->load->view('errors/'.$page);	
	}
	//--- end here
	//--- questionnaire upload 
	public function qustionnaire_upload(){

		$num = rand(8,12);
		$n = $num;
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    	$post_id = ''; 
	    for ($i = 0; $i < $n; $i++) { 
	        $index = rand(0, strlen($characters) - 1); 
	        $post_id .= $characters[$index]; 
	    } 
		if(isset($_FILES["file"]["name"]))
		  {
		   $path = $_FILES["file"]["tmp_name"];
		   $object = PHPExcel_IOFactory::load($path);

		   	$title = $this->input->post('title_name');
		    $class = $this->input->post('class_question'); 
		    $deadline = $this->input->post('reservationdate');
		    $option = $this->input->post('option');
		    $profile = $this->input->post('profile_quiz');
		    $timer = $this->input->post('timer');
		    $total = $this->input->post('total_score');
		    $insert = array(
		    	'time'=>$timer,
		    	'user_id'=>$class,
		    	'post_id'=>$post_id,
		    	'title'=>$title,
		    	'd_line'=>$deadline,
		    	'profile'=>$profile,
		    	'type'=>$option,
		    	'total'=>$total,
		    	'online'=>'1' 
		    );
		    $this->db->insert('tbl_lms_post',$insert);

		   foreach($object->getWorksheetIterator() as $worksheet)
		   {
		    $highestRow = $worksheet->getHighestRow();
		    $highestColumn = $worksheet->getHighestColumn();
		    for($row=3; $row<=$highestRow; $row++)
		    {	
		     $question = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
		     $ansA = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
		     $ansB = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
		     $ansC = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
		     $ansD = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
		     $answer = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
		     $data[] = array(
		      'question_id'=>$post_id,
		      'question'=> $question,
		      'a'=>$ansA,
		      'b'=>$ansB,
		      'c'=>$ansC,
		      'd'=>$ansD,
		      'correct_answer'=>$answer
		     );
		    }
		   }
		   $data=$this->model_users->insertQuestion($data);
	 		echo json_encode($data);;
		  } 
	}
	//--- end here
	//--- insert masterlist
	public function excel_pages(){
		 if(isset($_FILES["file"]["name"]))
		  {
		   $path = $_FILES["file"]["tmp_name"];
		   $object = PHPExcel_IOFactory::load($path);
		   foreach($object->getWorksheetIterator() as $worksheet)
		   {
		    $highestRow = $worksheet->getHighestRow();
		    $highestColumn = $worksheet->getHighestColumn();
		    for($row=3; $row<=$highestRow; $row++)
		    {
		     $studentname = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
		     $student_id = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
		     $sec_year = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
		     $instructor = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
		     $data[] = array(
		      'student_name'  => $studentname,
		      'student_id'   => $student_id,
		      'sec_year'    => $sec_year,
		      'instructor'=>$instructor
		     );
		    }
		   }
		   $data=$this->model_users->insertExcel($data);
	 		echo json_encode($data);;
		  } 
	}
	//--- end here
	//ajax parts ng system here
	//fetch data to chat box
	public function upload_landing(){
		if(!empty($_FILES['files']['name']) && count(array_filter($_FILES['files']['name'])) > 0){ 
                $filesCount = count($_FILES['files']['name']); 
                for($i = 0; $i < $filesCount; $i++){ 
                    $_FILES['file']['name']     = $_FILES['files']['name'][$i]; 
                    $_FILES['file']['type']     = $_FILES['files']['type'][$i]; 
                    $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i]; 
                    $_FILES['file']['error']     = $_FILES['files']['error'][$i]; 
                    $_FILES['file']['size']     = $_FILES['files']['size'][$i]; 
                    
                    $uploadPath = './assets/background/'; 
                    $config['upload_path'] = $uploadPath; 
                    $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
                    $this->load->library('upload', $config); 
                    $this->upload->initialize($config); 
                    
                    if($this->upload->do_upload('file')){ 
                        // Uploaded file data 
                        $fileData = $this->upload->data(); 
                        $uploadData[$i]['image'] = $fileData['file_name'];
                    }else{  
                        $errorUploadType .= $_FILES['image']['name'].' | ';  
                    } 
                } 
                 
                $errorUploadType = !empty($errorUploadType)?'<br/>File Type Error: '.trim($errorUploadType, ' | '):''; 
                if(!empty($uploadData)){ 
                    $data = $this->model_users->upload($uploadData);   
                    echo json_encode($data);
                }
            }
	}
	//---- using drop box
	public function fileUpload(){
		$stud = $this->input->post('stud');
		$class = $this->input->post('class_code_sub');
		$act = $this->input->post('activity_id');
		$type = $this->input->post('type_up');
		$total = $this->input->post('total_score');
	   if(!empty($_FILES['file']['name'])){
	     // Set preference
	     $config['upload_path'] = './assets/submit_file/'; 
	     $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|doc|docx|xls|xlsx|pptx';
	     $config['file_name'] = $_FILES['file']['name'];
	     //Load upload library
	     $this->load->library('upload',$config);
	     $this->upload->initialize($config);  
	     // File upload
	     if($this->upload->do_upload('file')){
	       // Get data about the file
	       $fileData = $this->upload->data();
	       $file = $fileData['file_name'];
	       $uploadData[$i]['file'] = $fileData['file_name'];
           $uploadData[$i]['activity_code'] = $act;
           $uploadData[$i]['class_code'] = $class;
           $uploadData[$i]['student_id'] = $stud;
           $uploadData[$i]['type'] = $type;
           $uploadData[$i]['total'] = $total;
	     }
	   }
	   $this->db->select('*');
	   $this->db->from('tbl_lms_submit');
	   $this->db->where('activity_code',$act);
	   $this->db->where('class_code',$class);
	   $this->db->where('student_id',$stud);
	   $query = $this->db->get();
		if($query->num_rows() != 0){
			$update = array(
				'file'=>$file,
				'online'=>'0'
			);
			$this->db->where('class_code',$class);
			$this->db->where('student_id',$stud);
			$this->db->where('activity_code',$act);
			$result = $this->db->update('tbl_lms_submit',$update);
			return $result;
	  	}
	   else{
	   		if(!empty($uploadData)){ 
            	$data = $this->model_users->upload2($uploadData);   
            	echo json_encode($data);
        	}
	   }
	 }
	//--- end here

	// public function upload_answer(){
	// 	$stud = $this->input->post('stud');
	// 	$class = $this->input->post('class_code_sub');
	// 	$act = $this->input->post('activity_id');
	// 	$type = $this->input->post('type_up');

	// 	if(!empty($_FILES['files']['name']) && count(array_filter($_FILES['files']['name'])) > 0){ 
 //                $filesCount = count($_FILES['files']['name']); 
 //                for($i = 0; $i < $filesCount; $i++){ 
 //                    $_FILES['file']['name']     = $_FILES['files']['name'][$i]; 
 //                    $_FILES['file']['type']     = $_FILES['files']['type'][$i]; 
 //                    $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i]; 
 //                    $_FILES['file']['error']     = $_FILES['files']['error'][$i]; 
 //                    $_FILES['file']['size']     = $_FILES['files']['size'][$i]; 
                    
 //                    $uploadPath = './assets/submit_file/'; 
 //                    $config['upload_path'] = $uploadPath; 
 //                    $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|doc|docx|xls|xlsx|pptx'; 
 //                    $this->load->library('upload', $config); 
 //                    $this->upload->initialize($config); 
                    
 //                    if($this->upload->do_upload('file')){ 
 //                        // Uploaded file data 
 //                        $fileData = $this->upload->data(); 
 //                        $uploadData[$i]['file'] = $fileData['file_name'];
 //                        $uploadData[$i]['activity_code'] = $act;
 //                        $uploadData[$i]['class_code'] = $class;
 //                        $uploadData[$i]['student_id'] = $stud;
 //                    	$uploadData[$i]['type'] = $type;
 //                    }
 //                } 	
 //                if(!empty($uploadData)){ 
 //                    $data = $this->model_users->upload2($uploadData);   
 //                    echo json_encode($data);
 //                }
 //            }
	// }

	public function upload_submit_files(){
		$post_id = $this->input->post('post_id_submit');
		$stud = $this->input->post('student_id');

		if(!empty($_FILES['files']['name']) && count(array_filter($_FILES['files']['name'])) > 0){ 
                $filesCount = count($_FILES['files']['name']); 
                for($i = 0; $i < $filesCount; $i++){ 
                    $_FILES['file']['name']     = $_FILES['files']['name'][$i]; 
                    $_FILES['file']['type']     = $_FILES['files']['type'][$i]; 
                    $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i]; 
                    $_FILES['file']['error']     = $_FILES['files']['error'][$i]; 
                    $_FILES['file']['size']     = $_FILES['files']['size'][$i]; 
                    
                    $uploadPath = './assets/submit_file/'; 
                    $config['upload_path'] = $uploadPath; 
                    $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|doc|docx|xls|xlsx|pptx'; 
                    $this->load->library('upload', $config); 
                    $this->upload->initialize($config); 
                    
                    if($this->upload->do_upload('file')){ 
                        // Uploaded file data 
                        $fileData = $this->upload->data(); 
                        $uploadData[$i]['file'] = $fileData['file_name'];
                        $uploadData[$i]['activity_code'] = $post_id;
                        $uploadData[$i]['status'] = '1';
                        $uploadData[$i]['student_id'] = $stud;
                    	$uploadData[$i]['type'] = '0';
                    }
                } 	
                if(!empty($uploadData)){ 
                    $data = $this->model_users->upload2($uploadData);   
                    echo json_encode($data);
                }
            }
	}
	public function send_registrar_files(){
		$text = $this->input->post('text_response');
		$student_id = $this->input->post('post_id_submit');
		if(!empty($_FILES['files']['name']) && count(array_filter($_FILES['files']['name'])) > 0){ 
                $filesCount = count($_FILES['files']['name']); 
                for($i = 0; $i < $filesCount; $i++){ 
                    $_FILES['file']['name']     = $_FILES['files']['name'][$i]; 
                    $_FILES['file']['type']     = $_FILES['files']['type'][$i]; 
                    $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i]; 
                    $_FILES['file']['error']     = $_FILES['files']['error'][$i]; 
                    $_FILES['file']['size']     = $_FILES['files']['size'][$i]; 
                    
                    $uploadPath = './assets/uploadPic/'; 
                    $config['upload_path'] = $uploadPath; 
                    $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|doc|docx|xls|xlsx|pptx'; 
                    $this->load->library('upload', $config); 
                    $this->upload->initialize($config); 
                    
                    if($this->upload->do_upload('file')){ 
                        // Uploaded file data 
                        $fileData = $this->upload->data(); 
                        $uploadData[$i]['files'] = $fileData['file_name'];
                        $uploadData[$i]['comment'] = $text;
                        $uploadData[$i]['student_id'] = $student_id;
                    }
                } 	
                if(!empty($uploadData)){ 
                    $data = $this->model_users->upload3($uploadData);   
                    echo json_encode($data);
                }
            }
	}
	//--- uploading files in folder
	public function folder_upload(){
		$folder = $this->input->post('folder');
		$num = rand(8,12);
		$n = $num;
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    	$post_id = ''; 
	    for ($i = 0; $i < $n; $i++) { 
	        $index = rand(0, strlen($characters) - 1); 
	        $post_id .= $characters[$index]; 
	    } 
		if(!empty($_FILES['files']['name']) && count(array_filter($_FILES['files']['name'])) > 0){ 
                $filesCount = count($_FILES['files']['name']); 
                for($i = 0; $i < $filesCount; $i++){ 
                    $_FILES['file']['name']     = $_FILES['files']['name'][$i]; 
                    $_FILES['file']['type']     = $_FILES['files']['type'][$i]; 
                    $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i]; 
                    $_FILES['file']['error']     = $_FILES['files']['error'][$i]; 
                    $_FILES['file']['size']     = $_FILES['files']['size'][$i]; 
                    $file_ext = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);

                    $uploadPath = './assets/resources/'; 
                    $config['upload_path'] = $uploadPath; 
                    $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|doc|docx|xls|xlsx|pptx|txt'; 
                    $this->load->library('upload', $config); 
                    $this->upload->initialize($config); 
                    
                    if($this->upload->do_upload('file')){ 
                        // Uploaded file data 
                        $fileData = $this->upload->data(); 
                        $uploadData[$i]['file'] = $fileData['file_name'];
                        $uploadData[$i]['file_ext'] = $file_ext;
                        $uploadData[$i]['folder_code'] = $folder;
                        $uploadData[$i]['post_id'] = $post_id;
                    }
                } 	
                if(!empty($uploadData)){ 
                    $data = $this->model_users->upload4($uploadData);   
                    echo json_encode($data);
                }
            }
	}
	//--- end here
	//--- download files here from resourcess
	public function downloadResources($fileName = NULL) {   
		   if ($fileName) {
		    $file = realpath ( "./assets/resources/" ) . "\\" . $fileName;
		    // check file exists    
		    if (file_exists ( $file )) {
		     // get file content
		     $data = file_get_contents ( $file );
		     //force download
		     force_download ( $fileName, $data );
		    } else {
		     // Redirect to base url
		     redirect ( base_url () );
		    }
		}
	}
	//--- end here
	//--- update class
	public function update_class(){
		$subject =$this->input->post('subject');
		$subcode =$this->input->post('subcode');
		$unit =$this->input->post('unit');
		$section =$this->input->post('section');
		$ww =$this->input->post('ww');
		$pt =$this->input->post('pt');
		$qa =$this->input->post('qa');
		$schedule = $this->input->post('schedule');
		$type = $this->input->post('type_class');
		$code = $this->input->post('class_code_update');

		$update = array(
			'course'=>$subject,
			'class_subject'=>$subcode,
			'unit'=>$unit,
			'section_yr'=>$section,
			'ww'=>$ww,
			'pt'=>$pt,
			'qa'=>$qa,
			'class_sched'=>$schedule,
			'sem'=>$type
		);
		$this->db->where('class_code',$code);
		$this->db->update('tbl_class',$update);
		$page="success_load"; 
		$this->load->view('errors/'.$page);	
	}
	//--- end here
	//--- end class
	 public function loadRecord($rowno=0){
	    $rowperpage = 20;
	    if($rowno != 0){
	      $rowno = ($rowno-1) * $rowperpage;
	    }
	    $allcount = $this->model_users->getrecordCount();
	    $users_record = $this->model_users->getData($rowno,$rowperpage);
	    $config['base_url'] = base_url().'index.php/pages/loadRecord';
	    $config['use_page_numbers'] = TRUE;
	    $config['total_rows'] = $allcount;
	    $config['per_page'] = $rowperpage;
	    $this->pagination->initialize($config);

	    $data['pagination'] = $this->pagination->create_links();
	    $data['result'] = $users_record;
	    $data['row'] = $rowno;
	    echo json_encode($data);
 	}
 	public function loadRecord2($rowno=0){
	    $rowperpage = 20;
	    if($rowno != 0){
	      $rowno = ($rowno-1) * $rowperpage;
	    }
	    $allcount = $this->model_users->getrecordCount2();
	    $users_record = $this->model_users->getData2($rowno,$rowperpage);
	    $config['base_url'] = base_url().'index.php/pages/loadRecord2';
	    $config['use_page_numbers'] = TRUE;
	    $config['total_rows'] = $allcount;
	    $config['per_page'] = $rowperpage;
	    $this->pagination->initialize($config);

	    $data['pagination'] = $this->pagination->create_links();
	    $data['result'] = $users_record;
	    $data['row'] = $rowno;
	    echo json_encode($data);
 	}
 	//--- read file
 	public function read_file(){
 		$file = $this->uri->segment(3);
	    $string = readfile("./assets/resources/".$file);
	    echo $string;
	}
 	//--- end here
 	//--- print College
	public function  print_studInform(){
		$data['stud_id'] = $this->uri->segment(3);
		$print = 'print';
		$this->load->view('registrar/'.$print,$data);
	}
	//--- end here
	//--- print k12 1st sem
	public function  print_studInformK121st(){
		$data['stud_id'] = $this->uri->segment(3);
		$print = 'print_k12';
		$this->load->view('registrar/'.$print,$data);
	}
	//--- end here
	//--- print k12 2nd sem
	public function  print_studInformK122nd(){
		$data['stud_id'] = $this->uri->segment(3);
		$print = 'print_k122nd';
		$this->load->view('registrar/'.$print,$data);
	}
	//--- end here
	public function fetch(){
		$data=$this->model_users->user_search();
	 	echo json_encode($data);
	}
	//--- search the class
	public function class_search(){
		$data=$this->model_users->class_search();
	 	echo json_encode($data);
	}
	//--- end here
	public function class_join(){
		$data=$this->model_users->class_join();
	 	echo json_encode($data);
	}
	public function delete_class_join(){
		$data=$this->model_users->cancel_join_class();
	 	echo json_encode($data);
	}
	public function chat_message(){
		$data = $this->input->post('code');
		$field = "chat_code";
		$table = "tbl_lms_msg";
		$data=$this->model_users->data3($data,$field,$table);
	 	echo json_encode($data);
	}
	public function user_chat_sent(){
		$data=$this->model_users->user_sent();
	 	echo json_encode($data);
	}
	public function user_chat(){
		$data = $this->input->post('id');
		$field = "id";
		$table = "tbl_account";
		$data=$this->model_users->data3($data,$field,$table);
	 	echo json_encode($data);
	}
	public function chat_user(){
		$data=$this->model_users->chat_user();
	 	echo json_encode($data);
	}
	public function ajax_reports(){
		$data=$this->model_users->ajax_reports();
	 	echo json_encode($data);
	}
	public function ajax_report_detail(){
		$data=$this->model_users->ajax_report_detail();
	 	echo json_encode($data);
	}
	//display specific data of report information
	public function ajax_detail(){
		$data=$this->model_users->ajax_display_data();
	 	echo json_encode($data);
	}
	//reply kay reports
	public function ajax_sent_response(){
		$data=$this->model_users->ajax_replay_report();
	 	echo json_encode($data);
	}
	//solve na ang problem
	public function ajax_solve_reports(){
		$data=$this->model_users->ajax_solve_report();
	 	echo json_encode($data);
	}
	//save and records ng solution taken
	public function ajax_save_solution(){
		$data=$this->model_users->ajax_save_solution();
	 	echo json_encode($data);
	}
	public function ajax_history_reports(){
		$data=$this->model_users->ajax_history_reports();
	 	echo json_encode($data);
	}
	public function ajax_latest_activity(){
		$data=$this->model_users->ajax_latest_activity();
	 	echo json_encode($data);
	}
	public function ajax_online_personel(){
		$data=$this->model_users->ajax_online_personel();
	 	echo json_encode($data);
	}
	public function ajax_all(){
		$data=$this->model_users->ajax_all_person();
	 	echo json_encode($data);
	}
	public function ajax_file_display(){
		$data = $this->input->post('post_id');
		$field='post_id';
		$table='tbl_lms_file';
		$data=$this->model_users->data($data,$field,$table);
	 	echo json_encode($data);
	}
	public function ajax_image(){
		$data = $this->input->post('id');
		$field='id';
		$table='tbl_lms_file';
		$data=$this->model_users->data($data,$field,$table);
	 	echo json_encode($data);
	}
	public function ajax_comment_no(){
		$data = $this->input->post('id');
		$field='id';
		$table='tbl_lms_post';
		$data=$this->model_users->data($data,$field,$table);
	 	echo json_encode($data);
	}
	public function ajax_comment_load(){
		$data = $this->input->post('id');
		$field='post_id';
		$table='tbl_lms_comment';
		$data=$this->model_users->data3($data,$field,$table);
	 	echo json_encode($data);
	}
	public function ajax_sent_comment(){
		$data=$this->model_users->ajax_comment();
	 	echo json_encode($data);
	}
	//--- user information
	public function ajax_info_load(){
		$data = $this->input->post('id');
		$field = 'id';
		$table ='tbl_account';
		$data=$this->model_users->data($data,$field,$table);
	 	echo json_encode($data);
	}
	//--- end here
	public function ajax_show_class(){
		$data = $this->input->post('id');
		$field = 'admin_id';
		$table ='tbl_class';
		$data=$this->model_users->data($data,$field,$table);
	 	echo json_encode($data);
	}
	public function ajax_ass_act(){
		$data = $this->input->post('id');
		$field = 'user_id';
		$table ='tbl_lms_post';
		$con = '1';
		$data=$this->model_users->data5($data,$field,$table,$con);
	 	echo json_encode($data);
	}
	public function ajax_ass_actAdmin(){
		$data = $this->input->post('id');
		$field = 'user_id';
		$table ='tbl_lms_post';
		$con = '1';
		$data=$this->model_users->data5Admin($data,$field,$table,$con);
	 	echo json_encode($data);
	}
	//--- closed the account
	public function ajax_toggle_off(){
		$data="2";
		$data=$this->model_users->toggle($data);
	 	echo json_encode($data);
	}
	//--- end here
	public function ajax_toggle_on(){
		$data="0";
		$data=$this->model_users->toggle($data);
	 	echo json_encode($data);
	}
	//--- displaying student enrollled class
	public function ajax_student_class(){
		$data=$this->model_users->show_class();
	 	echo json_encode($data);
	}
	//--- end here
	public function ajax_masterlist(){
		$table="tbl_master_list";
		$data=$this->model_users->data7($table);
	 	echo json_encode($data);
	}
	public function ajax_masterlist_search(){
		$data=$this->model_users->master_search();
	 	echo json_encode($data);
	}
	//--- deleting the masterlist and then rename the status into 1 and add name to become traceable
	public function delete_masterlist(){
		$data=$this->model_users->delete_masterlist();
	 	echo json_encode($data);
	}
	//--- end here
	public function delete_master_sel(){
		$data = '0';
		$field= 'lms_acc';
		$table= 'tbl_master_list';
		$data=$this->model_users->delete($data,$field,$table);
	 	echo json_encode($data);
	}
	public function ajax_student_inform(){
		$data = '1';
		$field = 'department';
		$table='tbl_account';
		$data = $this->model_users->data($data, $field, $table);
		echo json_encode($data);
	}
	public function ajax_forgot_pass(){
		$data = $this->model_users->changepass();
		echo json_encode($data);
	}
	public function ajax_not_allow(){
		$data = $this->model_users->not_allow();
		echo json_encode($data);
	}
	public function ajax_allow(){
		$data = $this->model_users->allow();
		echo json_encode($data);
	}
	public function ajax_delete_student(){
		$data = $this->input->post('id');
		$field= 'id';
		$table= 'tbl_account';
		$data=$this->model_users->delete($data,$field,$table);
	 	echo json_encode($data);
	}
	public function ajax_lms_search(){
		$data=$this->model_users->student_search();
	 	echo json_encode($data);
	}
	public function ajax_subject_approve(){
		$data = $this->input->post('id');
		$field = 'student_id';
		$table='tbl_account';
		$data = $this->model_users->data($data, $field, $table);
		echo json_encode($data);
	}
	public function ajax_student_app(){
		$data = $this->model_users->approve_student();
		echo json_encode($data);
	}
	public function ajax_student_cancel(){
		$data = $this->model_users->reject_student();
		echo json_encode($data);
	}
	public function ajax_report_ok(){
		$data = $this->model_users->report_ok();
		echo json_encode($data);
	}
	//--- to display sections 
	public function ajax_section(){
		$table = 'tbl_master_list';
		$data = $this->model_users->data2Sec($table);
		echo json_encode($data);
	}
	//---  end here
	public function ajax_student_list(){
		$data = $this->input->post('section');
		$field = 'sec_year';
		$table='tbl_master_list';
		$data = $this->model_users->data($data, $field, $table);
		echo json_encode($data);
	}
	public function ajax_request_join(){
		$data = $this->model_users->view_request();
		echo json_encode($data);
	}
	public function ajax_request_approve(){
		$data = $this->model_users->ajax_approve_stud();
		echo json_encode($data);
	}
	public function ajax_online_student(){
		$data = $this->model_users->class_student_mem();
		echo json_encode($data);
	}
	public function ajax_galery(){
		$table='tbl_lms_file';
		$data = $this->model_users->data2Gal($table);
		echo json_encode($data);
	}
	//--- background images
	public function ajax_background(){
		$table='tbl_images_landing';
		$data = $this->model_users->data2Gal($table);
		echo json_encode($data);
	}
	//--- end here
	public function ajax_delete_landing(){
		$data = $this->input->post('id');
		$field="id";
		$table="tbl_images_landing";
		$data = $this->model_users->delete($data, $field, $table);
		echo json_encode($data);
	}
	public function ajax_display_click(){
		$data = $this->input->post('id');
		$field="id";
		$table="tbl_images_landing";
		$data = $this->model_users->data3($data,$field,$table);
		echo json_encode($data);
	}
	public function time_ol(){
		$data = $this->model_users->time_ol();
		echo json_encode($data);
	}
	public function ajax_chat_display(){
		$data = $this->model_users->display_chat();
		echo json_encode($data);
	}
	public function ajax_sent_msg(){
		$data = $this->model_users->sent_msg();
		echo json_encode($data);
	}
	public function activity_display(){
		$data = $this->input->post('activity_id');
		$field="post_id";
		$table="tbl_lms_file";
		$data = $this->model_users->data($data,$field,$table);
		echo json_encode($data);
	}
	public function ajax_stud_actRec(){
		$data = $this->model_users->stud_rec_act();
		echo json_encode($data);
	}
	public function ajax_del_send(){
		$data = $this->model_users->delete_send();
		echo json_encode($data);
	}
	public function activity_display_inst(){
		$data = $this->input->post('post_id');
		$field="post_id";
		$table="tbl_lms_post";
		$data = $this->model_users->data($data,$field,$table);
		echo json_encode($data);
	}
	public function ajax_class_submitFile(){
		$data = $this->model_users->ajax_class_submitFile();
		echo json_encode($data);
	}
	public function ajax_student_activity(){
		$data = $this->model_users->ajax_student_activity();
		echo json_encode($data);
	}
	public function ajax_files_rec(){
		$data = $this->model_users->ajax_files_rec();
		echo json_encode($data);
	}	
	public function ajax_allow_actShrt(){
		$data = $this->model_users->ajax_allow_actShrt();
		echo json_encode($data);
	}
	public function ajax_stud_submitRec(){
		$data = $this->model_users->ajax_stud_submitRec();
		echo json_encode($data);
	}
	//--- input grades	
	public function ajax_input_grades(){
		$data = $this->model_users->ajax_input_grades();
		echo json_encode($data);
	}
	//--- end here
	public function ajax_view_actMode(){
		$data = $this->model_users->ajax_view_actMode();
		echo json_encode($data);
	}
	//--- displaying student grades active
	public function ajax_displayRecords(){
		$data = $this->model_users->ajax_displayRecords();
		echo json_encode($data);
	}
	//--- end here
	public function ajax_editFgrades(){
		$data = $this->model_users->ajax_editFgrades();
		echo json_encode($data);
	}
	public function ajax_editFgradesPassFinal(){
		$data = $this->model_users->ajax_editFgradesPassFinal();
		echo json_encode($data);
	}
	public function ajax_editFgradesFailedFinal(){
		$data = $this->model_users->ajax_editFgradesFailedFinal();
		echo json_encode($data);
	}
	public function ajax_studPrintInfo(){
		$data = $this->model_users->ajax_studPrintInfo();
		echo json_encode($data);	
	}
	public function ajax_studPrintSub(){
		$data = $this->model_users->ajax_studPrintSub();
		echo json_encode($data);	
	}
	public function ajax_filesDisplay(){
		$data = $this->model_users->ajax_filesDisplay();
		echo json_encode($data);
	}
	public function ajax_filesDisplayUserMode(){
		$data = $this->model_users->ajax_filesDisplayUserMode();
		echo json_encode($data);
	}
	public function view_submittedStudentFiles(){
		$data = $this->model_users->view_submittedStudentFiles();
		echo json_encode($data);
	}
	public function ajax_request_fileView(){
		$data = $this->input->post('student_id');
		$field = 'student_id';
		$table = 'tbl_request_file';
		$data = $this->model_users->data($data,$field,$table);
		echo json_encode($data);
	}
	public function ajax_allPerson_stud(){
		$data=$this->model_users->ajax_allPerson_stud();
	 	echo json_encode($data);
	}
 	public function ajax_philtech_personal(){
		$data = $this->model_users->data4();
		echo json_encode($data);
 	}
 	//--- save admin and registrar Account
 	public function add_admin_instructor(){
 		$data = $this->model_users->ajax_addInstructor();
		echo json_encode($data);	
 	}
 	//--- end here
 	//--- display class in view of registrar
 	public function ajax_class_list(){
 		$data = $this->model_users->ajax_class_list();
		echo json_encode($data);
 	}
 	//--- end here
 	public function ajax_classStudent(){
 		$data = $this->model_users->ajax_classStudent();
		echo json_encode($data);
 	}
 	public function ajax_display_submitted(){
 		$data = $this->model_users->ajax_display_submitted();
		echo json_encode($data);
 	}
 	public function ajax_views_recs(){
 		$data = $this->model_users->ajax_views_recs();
		echo json_encode($data);
 	}
 	public function ajax_delete_mod(){
 		$data = $this->model_users->ajax_delete_mod();
		echo json_encode($data);	
 	}

 	//---create folder
 	public function ajax_create_folder(){
 		$data = $this->model_users->ajax_create_folder();
		echo json_encode($data);
 	}
 	//--- end here
 	//--- view folder 
 	public function ajax_folder_view(){
 		$data = $this->input->post('location');
 		$field= "location_code";
 		$table= "tbl_folder";
 		$data = $this->model_users->data3($data,$field,$table);
		echo json_encode($data);
 	}
 	//--- end here
 	//--- view files records
 	public function ajax_files_view(){
 		$data = $this->input->post('location');
 		$field= "folder_code";
 		$table= "tbl_lms_file";
 		$data = $this->model_users->data3($data,$field,$table);
		echo json_encode($data);
 	}
 	//--- end here
 	//--- delete folder
 	public function ajax_folder_del(){
 		$data = $this->input->post('id');
 		$field= "id";
 		$table= "tbl_folder";
 		$data = $this->model_users->delete($data, $field, $table);
		echo json_encode($data);
 	}
 	//--- end here
 	//--- back folder
 	public function ajax_back_folder(){
 		$data = $this->input->post('id');
 		$field= "folder_code";
 		$table= "tbl_folder";
 		$data = $this->model_users->data3($data,$field,$table);
		echo json_encode($data);
 	}
 	//--- end here
 	//--- save link
 	public function ajax_save_link(){
 		$data = $this->model_users->ajax_save_link();
		echo json_encode($data);	
 	}
 	//--- end here
 	public function ajax_file_del(){
 		$data = $this->input->post('id');
 		$field= "id";
 		$table= "tbl_lms_file";
 		$data = $this->model_users->delete($data, $field, $table);
		echo json_encode($data);
 	}
 	//--- look for all person inside the system
 	public function ajax_allshareUser(){
 		$data = $this->model_users->ajax_allshareUser();
		echo json_encode($data);
 	}
 	//--- end here.
 	//--- share folder here confirm
 	public function ajax_share_confirm(){
 		$data = $this->model_users->ajax_share_confirm();
 		echo json_encode($data);
 	}
 	//--- end here
 	//--- delete account
 	public function ajax_accountDelete(){
 		$data = $this->input->post('id');
 		$field = 'id';
 		$table = 'tbl_account';
 		$data = $this->model_users->delete($data, $field, $table);
 		echo json_encode($data);
 	}	
 	//--- end here
 	//--- admin and registrar change pass
 	public function adminChanagePass(){
 		$data = $this->model_users->changepass();
 		echo json_encode($data);
 	}
 	//--- end here
 	//--- allow all student to login
 	public function ajax_allow_all(){
 		$data = $this->model_users->ajax_allow_all();
 		echo json_encode($data);	
 	}
 	//--- end  here
 	//--- dis-allowed all student account
 	public function ajax_disallow_all(){
 		$data = $this->model_users->ajax_disallow_all();
 		echo json_encode($data);	
 	}
 	//--- end here
 	//--- display my class to share
 	public function ajax_share_class(){
 		$data = $this->input->post('id');
 		$field="admin_id";
        $table="tbl_class";
 		$data = $this->model_users->data($data,$field,$table);
 		echo json_encode($data);	
 	}
 	//--- end here
 	//--- view calendar
 	public function class_calendar(){
 		$event_data = $this->model_users->fetch_event();
		  foreach($event_data->result_array() as $row)
		  {
		   $data[] = array(
		    'id' => $row['id'],
		    'title' => $row['title'],
		    'start' => $row['start_event'],
		    'end' => $row['end_event']
		   );
		  }
		  echo json_encode($data);
 	}
 	public function event_load(){
	  	$event_data = $this->model_users->fetch_all_event();
		  foreach($event_data->result_array() as $row)
		  {
		   $data[] = array(
		    'id' => $row['id'],
		    'title' => $row['title'],
		    'start' => $row['start_event'],
		    'end' => $row['end_event']
		   );
		  }
		  echo json_encode($data);
	}
	//--- end here
	//--- insert event in calendar
	public function event_insert(){
		if($this->input->post('title')){
		   $data = array(
		   	'user_id'  => $this->input->post('id'),
		    'title'  => $this->input->post('title'),
		    'start_event'=> $this->input->post('start'),
		    'end_event' => $this->input->post('end')
		   );
		   $this->model_users->insert_event($data);
		}
	}
	//--- end here
	//--- update event
	public  function event_update(){
		if($this->input->post('id')){
		   $data = array(
		    'title'   => $this->input->post('title'),
		    'start_event' => $this->input->post('start'),
		    'end_event'  => $this->input->post('end')
		   );
			$this->model_users->update_event($data, $this->input->post('id'));
		}
	}
	//--- end here
	//--- delete calendar 
	public function event_delete(){
	  	if($this->input->post('id')){
	   		$this->model_users->delete_event($this->input->post('id'));
	  	}
	}
	//--- end here
	//--- check the attemp of student taking online exam, quiz, activity
	public function ajax_attemp(){
		$data = $this->model_users->ajax_attemp();
 		echo json_encode($data);	
	}
	//--- end here
	//--- first attemp
	public function first_attemp(){
		$data = $this->model_users->first_attemp();
 		echo json_encode($data);	
	}
	//--- end here
	//--- next attemp lessthan 3 more than 1
	public function next_attemp(){
		$data = $this->model_users->next_attemp();
 		echo json_encode($data);	
	}
	//--- end here
	//--- generate first attemp
	public function first_generate(){
		$data = $this->model_users->first_generate();
 		echo json_encode($data);	
	}
	//--- end here
	//--- generate question
	public function generate_question(){
		$data = $this->model_users->generate_question();
 		echo json_encode($data);		
	}
	//--- end here
	//public function save answer
	public function answer_question(){
		$data = $this->model_users->answer_question();
 		echo json_encode($data);
	}
	//--- end here
	//--- wrong answer
	public function answerWrong_question(){
		$data = $this->model_users->answerWrong_question();
 		echo json_encode($data);
	}
	//--- end here
	//--- save long answer
	public function saveLong_answer(){
		$data = $this->model_users->saveLong_answer();
 		echo json_encode($data);
	}
	//--- end here 
	//--- save all answer
	public function save_allAnswer(){
		$data = $this->model_users->save_allAnswer();
 		echo json_encode($data);
	}
	//--- end here
	//--- finalize the result
	public function finalize_record(){
		$data = $this->model_users->finalize_record();
 		echo json_encode($data);
	}
	//--- end here
	//--- quit the subject
	public function ajax_quitSub(){
		$data = $this->model_users->ajax_quitSub();
		echo json_encode($data);
	}
	//--- end here
	//--- check the student answer
	public function check_student(){
		$data =$this->model_users->check_student();
		echo json_encode($data);
	}
	//--- end here
	//--- putting score to the students 
	public function ajax_point_score(){
		$data = $this->model_users->ajax_point_score();
		echo json_encode($data);
	}
	//--- end here
	//--- delete all records of activity including the answer
	public function delete_activity(){
		$data = $this->model_users->delete_activity();
		echo json_encode($data);
	}
	//--- end here
	//--- save quarter 
	public function save_quarter(){
		$data = $this->model_users->save_quarter();
		echo json_encode($data);
	}
	//--- end here
	//--- display the grading system
	public function display_gradeTitle(){
		$data = $this->model_users->display_gradeTitle();
		echo json_encode($data);
	}
	//--- end here
	//--- loading student grades
	public function studentGrades(){
		$data = $this->model_users->studentGrades();
		echo json_encode($data);
	}
	//--- end here
	//--- load the score
	public function load_totalScore(){
		$data = $this->model_users->load_totalScore();
		echo json_encode($data);
	}
	//--- end here
	//--- load student 
	public function load_totalStud(){
		$data = $this->model_users->load_totalStud();
		echo json_encode($data);
	}
	//--- end here
	//--- saving student grades into database
	public function saving_grades(){
		$data = $this->model_users->saving_grades();
		echo json_encode($data);
	}
	//--- end here
	//--- saving the transmuted grades
	public function transmuted_grades(){
		$data = $this->model_users->transmuted_grades();
		echo json_encode($data);
	}
	//--- end here
	//--- input  FN grades
	public function input_fn_grades(){
		$data = $this->model_users->input_fn_grades();
		echo json_encode($data);
	}
	//--- end here
	//--- add attemp to the student in onlione take
	public function add_attemp(){
		$data = $this->model_users->add_attemp();
		echo json_encode($data);
	}
	//--- end here
	//--- send it to the registrar
	public function send_registrar(){
		$data = $this->model_users->send_registrar();
		echo json_encode($data);
	}
	//--- end here
	//--- display the information 
	public function display_class_info(){
		$data = $this->model_users->display_class_info();
		echo json_encode($data);		
	}
	//--- end here
	//--- delete the class
	public function delete_class(){
		$data = $this->input->post('code');
		$field = "class_code";
		$table = "tbl_class";
		$data = $this->model_users->delete($data, $field, $table);
		echo json_encode($data);
	}
	//--- end here
	//--- adding class link
	public function add_link(){
		$data = $this->model_users->add_link();
		echo json_encode($data);
	}
	//--- end here
	//--- viwe rhe link
	public function view_links(){
		$data = $this->model_users->view_links();
		echo json_encode($data);
	}
	//--- end here
	//--- delete link
	public function delete_link(){
		$data = $this->input->post('id');
		$field = "id";
		$table = "tbl_lms_link";
		$data = $this->model_users->delete($data, $field, $table);
		echo json_encode($data);
	}
	//--- end here
	//--- graph the student concern
	public function student_concernGraph(){
		$data = $this->model_users->concernGraph();
		echo json_encode($data);
	}
	//--- end here
	//--- student grades
	public function student_gradesGraph(){
		$data = $this->model_users->student_gradesGraph();
		echo json_encode($data);
	}
	//--- end here
	//--- to count all files inside the lms
	public function count_allFiles(){
		$data = $this->model_users->count_allFiles();
		echo json_encode($data);
	}
	//--- end here
	//--- updating the student
	public function updating_stud(){
		$data = $this->model_users->updating_stud();
		echo json_encode($data);
	}
	//--- end here
	//--- updating the student account
	public function updating_studAccount(){
		$data = $this->model_users->updating_studAccount();
		echo json_encode($data);	
	}
	//--- end here
	//--- set up new sem all course and subject previosly enrolled will be closed
	public function newSem(){
		$data = $this->model_users->newSem();
		echo json_encode($data);
	}
	//--- end here



////-----end of controller pages
}
