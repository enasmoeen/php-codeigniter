<?php
class article_ctrl extends CI_Controller {

public function __construct()
 {
   parent::__construct();
    $this->load->model('article_model');
 }

 public function index()
 {
	 
	    $this->load->view('article_view');
		
 }
 function insertdata(){
	  		 
	$data=array(     
		'article_title' => $this->input->post('title'),
		'article_body' =>$this->input->post('body'),

		'article_author' => $this->input->post('author'),
		'user_id' => $this->session->userdata('session_id')
		
		);	
		$this->article_model->insertarticle($data);	
		
       $files = $_FILES;
       $cpt = count($_FILES['user_image']['name']);
	    for($i=0; $i<$cpt; $i++){
			  $_FILES['user_image']['name']= $files['user_image']['name'][$i];
              $_FILES['user_image']['type']= $files['user_image']['type'][$i];
              $_FILES['user_image']['tmp_name']= $files['user_image']['tmp_name'][$i];
              $_FILES['user_image']['error']= $files['user_image']['error'][$i];
              $_FILES['user_image']['size']= $files['user_image']['size'][$i];
	
         $config['upload_path']='./file/';
		 $config['allowed_types']='gif|jpg|png';
		 $config['max_size']=500000;
		 $config['encrypt_name']=FALSE;
		 $this->load->library('upload',$config);
		 $this->upload->initialize($config);
		 $this->upload->do_upload();
		 $filename = $_FILES['user_image']['name'];
		 $images[] = $filename;
		

		
		 $res=$this->article_model->getid();	
        if($res){
	     $imdata=array(
	     'image1'=>  $_FILES['user_image']['name'],
	     'art_id'=>$this->session->userdata('ART_id')
                );}



	  	$this->article_model->image_insert($imdata);
		
		}
	 $this->load->view('welcome_view');
 }

}
 ?>