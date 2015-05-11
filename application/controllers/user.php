<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	/*
	Build by Arnold KOUYA 
	Backend developer and Android Developer
	Web entrepreuneur
	arnoldkouya@gmail.com
	(225) 49 11 95 98
	form USING Bootstrap Material Design 
	*/
	public function index()
	{
		$data['users']=$this->user_model->get_all_user();
		$this->load->view('home_user',$data);
	}

	function create()
	{
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('surname', 'Surame', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run()) {
			$data=array(
                  'name'=>$this->input->post('name'),
                  'surname'=>$this->input->post('surname'),
                  'password'=>$this->input->post('password'),
                  'email'=>$this->input->post('email')
                  
				);
			$this->user_model->insert_user($data);
			$this->session->set_flashdata('succes','Added correctly !');
			redirect('index.php/user');
		}else{
			$this->load->view('home_user');
		}
			
		
		
	}

	function update($id_user)
	{
		# code...
	}

	function delete($id_user){
		 $this->user_model->delete_user($id_user);
		 $this->session->set_flashdata('delete','Deleted correctly !');
        redirect (base_url().'index.php/user/');
        }
	
	function get_user(){
    
       $id_user=$this->input->post('id');
       $data['user']=$this->user_model->get_user($id_user);
       echo json_encode($data);
    
           
  }

}
