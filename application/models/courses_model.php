<?php
/**
*  model
*/
class Courses_model extends CI_Model
{
	public function get_all_courses()
	{
		return $this->db->query("SELECT * FROM courses")->result_array();
	}
	public function add_course($array)
	{
		$query="INSERT INTO courses (name,decription,created_at) VALUES (?,?,?)";
		$values=array($array['name'],$array['description'],date("Y-m-d, H:i:s"));
		return $this->db->query($query,$values);
	}

}



?>