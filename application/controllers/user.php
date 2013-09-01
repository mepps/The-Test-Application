<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model("Users_model");
		$users = $this->Users_model->get_users();
	}

	public function register()
	{

		$this->load->view('register');
	}

	public function process_registration()
	{
		$this->form_validation->set_rules('first_name','first name', 'required');
		$this->form_validation->set_rules('last_name', 'last name', 'required');
		$this->form_validation->set_rules('email','email', 'valid_email|required|is_unique(users.email)');
		$this->form_validation->set_rules('password', 'password', 'min_length[6]|required');

		if($this->form_validation->run() === FALSE)
		{
			echo validation_errors();
		}
		else 
		{			
			$this->Users_model->register_user();
			redirect('/main/dashboard');
		}	
	}

	public function login()
	{		
		$this->load->view('login');
	}


	public function process_login()
	{
		$this->form_validation->set_rules('email','email', 'valid_email|required|is_unique(users.email)');
		$this->form_validation->set_rules('password', 'password', 'min_length[6]|required');
		if ($this->form_validation->run()==FALSE)
		{
			$data['errors'] = validation_errors();
			$this->load->view('login', $data);
		}
		else
		{
			$user = $this->Users_model->login_user();
			if ($user==false)
			{
				$data['errors'] = "Wrong username or password.";
				$this->load->view('login', $data);	
			}
			else
			{
				$this->session->set_userdata('user', $user);
				redirect('/main/dashboard/');
			}
		}
	}

}
