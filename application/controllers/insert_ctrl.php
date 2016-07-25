<?php
class insert_ctrl extends CI_Controller{
	function __construct(){
   
	parent::__construct();
    $this->load->model('insert_model');
	}

function index(){
	$this->load->library('form_validation');
	$this->form_validation->set_error_delimiters('<div class="error">','</div>');
	
	$this->form_validation->set_rules('dname','Username','required|min_length[5]|max_length[15]');
	
	$this->form_validation->set_rules('demail','Email','required|valid_email');
	
	$this->form_validation->set_rules('dmobile','Mobile No.','required|regex_match[/^[0-9]{10}$/]');
	
	$this->form_validation->set_rules('daddress','Address','required|min_length[10]|max_length[50]');
	if($this->form_validation->run()==FALSE)
	{
		$this->load->view('insert_view');
	}
	else{
		$data=array(
		'student_name' => $this->input->post('dname'),
		'student_email' => $this->input->post('demail'),
		'student_mobile' => $this->input->post('dmobile'),
		'student_adresses' => $this->input->post('daddress')
		);
		$this->insert_model->form_insert($data);
		
		$this->load->view('insert_view');
	}
}
}
?>