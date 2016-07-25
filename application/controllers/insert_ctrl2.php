<?php
class insert_ctrl2 extends CI_Controller{
	function __construct(){
   
	parent::__construct();
    $this->load->model('insert_model');
	
	
	}

function index(){

	

	
	
	
	
	
	$this->load->library('form_validation');
	$this->form_validation->set_error_delimiters('<div class="error">','</div>');
	
	$this->form_validation->set_rules('dname','Username','required|min_length[3]|max_length[16]|is_unique[users.uname]');
	
	$this->form_validation->set_rules('demail','Email','required|valid_email');
	
    $this->form_validation->set_rules('reg_pass1','Password','required|matches[reg_pass2]|min_length[6]|alpha_numeric');
		
    $this->form_validation->set_rules('reg_pass2','Confirm Password','required|min_length[6]|alpha_numeric');
	
	$this->form_validation->set_rules('dfname','Firstname','required|min_length[3]|max_length[16]');
	
	$this->form_validation->set_rules('dlname','Lastname','required|min_length[3]|max_length[16]');
	
	$this->form_validation->set_rules('dmobile','Mobile No.','required|regex_match[/^972-[0-9]{4}-[0-9]{4}$/]');


    

	if($this->form_validation->run()==FALSE)
	{
		$this->load->view('insert_view2');
	}
	else{
		
		 $config['upload_path']='./file/';
		 $config['allowed_types']='gif|jpg|png';
		 $config['max_size']=500000;
		 $config['encrypt_name']=FALSE;
		 
		 $this->load->library('upload',$config);
		 $this->upload->initialize($config);
		 if($this->upload->do_upload('user_image'))
		 {
			 $data=$this->upload->data();
			 $image=$data['file_name'];
		$data=array(
		'uname' => $this->input->post('dname'),
		'password' =>md5($this->input->post('reg_pass1')),
		'fname' => $this->input->post('dfname'),
		'lname' => $this->input->post('dlname'),
	    'email' => $this->input->post('demail'),
		'phone' => $this->input->post('dmobile'),
		'datee' => $this->input->post('ddatee'),
		'userpic' =>$image,
		'zipcode' => $this->input->post('zc'),
		'city' => $this->input->post('ci'),
		'state' => $this->input->post('stt')
		);
		$this->insert_model->form_insert($data);
		
			$config2=array(
	'protocl'=>'smtp',
	'smtp_host'=>'ssl:smtp.googlemail.com',
	'smtp_port'=>465,
	'smtp_user'=>'khdiana1994@gmail.com',
	'smtp_pass'=>'Di987987'
	);
	$this->load->library('email',$config2);
	$this->email->set_newline("\r\n");
	$this->email->from('khdiana1994@gmail.com','anosa');
	$this->email->to( $this->input->post('demail'));
	$this->email->subject('this is email test');
	$this->email->message('great');
	if($this->email->send()){
		echo "your email was sent";
	}else{
		show_error($this->email->print_debugger());
	
	}
		 	$this->load->view('insert_view2');
		 }
	}
}
}
?>