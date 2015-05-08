<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	/*
	Build by Arnold KOUYA form USING Bootstrap Material Design 
	*/
	public function index()
	{
		$data['users']=$this->user_model->get_all_user();
		$this->load->view('home_user',$data);
	}

	function create()
	{
		# code...
	}

	function update($id_user)
	{
		# code...
	}

	function delete($id_user)
	{
		# code...
	}
}
