

<?php
Class login_model extends CI_Model
{
public	function __construct(){
		parent::__construct();
		
	}
	 
   function login($username, $password)
     {

	  
	  
		 $this->db->where("uname",$username);
		  $this->db->where("password",$password);
		  
		  
		  $query=$this->db->get("users");
		  
		  if($query->num_rows()>0){
			 foreach($query->result() as $rows){
				 $newdata=array(
				 'uname'=>$rows->uname,
				 'logged_in'=>true,
				 );
			 }
			 $this->session->set_userdata($newdata);
			 return true;
		  }
		 else{
		 return false;}
		 
     }
	 function get_all(){
		 $thia->db->select('uname,fname,lname,email');
		 $query=$this->db->get('users');
		 return $query->result_array();
	 }
}
?>