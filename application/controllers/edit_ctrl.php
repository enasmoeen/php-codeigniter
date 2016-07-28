<?php
class edit_ctrl extends CI_Controller {
 
 function __Construct(){
  parent::__Construct ();

   $this->load->model('edit_model'); // load model 
 }
 
 public function index() {
   $this->data['posts'] = $this->edit_model->getPosts(); // calling Post model method getPosts()
 
  
   $this->load->view('edit&view', $this->data); // load the view file , we are passing $data array to view file
 }
 
 
}
?>