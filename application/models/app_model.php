<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class app_model extends CI_Model
{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

     //get the username & password from tbl_usrs
     function get_user($usr, $pwd)
     {
          $sql = "select * from sectable where username = '" . $usr . "' and password = '" . $pwd ."'";
          $query = $this->db->query($sql);
          return $query->num_rows();
     }
	 function insert_report($title, $publishdate)
     {
          $insert_id=0;
		  $sql_select = "select * from reports where title='".$title."' and publishdate ='".$publishdate."'";
		  $select_query = $this->db->query($sql_select);
		  if($select_query->num_rows() == 0)
		  {
		  $sql = "insert into reports (title,publishdate) values ('".$title."','".$publishdate."')";
          $query = $this->db->query($sql);
		  $insert_id = $this->db->insert_id();
		  return $insert_id;
		  }
		  else
		  {
			 return $insert_id;
		  }
		  
     }
	 /* function insert_article($title, $publishdate)
     {
          $sql = "insert into reports (title,publishdate) values ('".$title."','".$publishdate."')";
          $query = $this->db->query($sql);
		  $insert_id = $this->db->insert_id();
		  return $insert_id;
     } */
}?>