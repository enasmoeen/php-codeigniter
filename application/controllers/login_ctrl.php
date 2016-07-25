<?php
class login_ctrl extends CI_Controller {

public function __construct()
 {
   parent::__construct();
    $this->load->model('login_model');
 }

 public function index()
 {
	 
	    $this->load->view('login_view');
 }

	function login(){
			$this->load->library('session');
		$this->load->library('form_validation');
	    $this->form_validation->set_rules("name", "Username", "trim|required");
        $this->form_validation->set_rules("password", "Password", "trim|required");
		
		 if($this->form_validation->run() == false)
   {	
 $this->load->view('login_view');
}else{
	   $username = $this->input->post("name");
       $password = md5($this->input->post("password")); 
	    $result = $this->login_model->login($username, $password);
		if(!$result){
				echo "<script>alert('error login form,please try again');</script>";
			 $this->load->view('login_view');
		
		}else{
			echo "<script>alert('successful logined');</script>";
			 $this->load->view('login_view');
		}
}
	}
	function display(){
		$this->data['users']=$this->login_model->get_all();
		$this->load->view('users',$this->data);
	}
}
?>