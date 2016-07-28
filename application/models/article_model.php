<?php
Class article_model extends CI_Model
{
public	function __construct(){
		parent::__construct();
		
	}
	function insertarticle($data){
		 

	$this->db->insert('article',$data);
	}
    function image_insert($imdata){
			$this->db->insert('images',$imdata);
		
	}
	function getid(){
				 $query=$this->db->get("article");
		  if($query->num_rows()>0){
			  foreach($query->result() as $rows){
				 $newdata=array(
				 'article_id'=>$rows->article_id,

				 );
			 }
			  $session_id=$rows->article_id;
			 $this->session->set_userdata('ART_id',$session_id);
			 return true;
		  }
		   return false;
	}
}
?>