<?php
class edit_model extends CI_Model {
 
 function getPosts(){
	$idd=$this->session->userdata('session_id');
  $this->db->select("article_title,article_body,article_author"); 
  $this->db->from('article');
  
    $this->db->where("user_id",$idd);
  $query = $this->db->get();
  return $query->result();
 }
 
}
?>