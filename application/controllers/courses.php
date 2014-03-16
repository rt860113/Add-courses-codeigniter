<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller {

	public function index()
	{
		$this->load->view('/courses/courses');
	}
	public function add_course()
	{
		$array=array(
			"name"=>$this->input->post('name'),
			"description"=>$this->input->post('description'));
		$this->load->model("courses_model");
		$test=$this->courses_model->add_course($array);
		var_dump($test);
	}
}