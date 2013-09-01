<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Users_model");
	}

	public function dashboard()
	{
		if (isset($this->session->userdata['user']))
		{
			$data['users'] = $this->Users_model->get_users();
			$this->load->view('dashboard', $data);
		}
		else
		{
			redirect('/');
		}

	}

	public function profile($id)
	{
		if (isset($this->session->userdata['user']))
		{
			$data['id'] = $id;
			$data['users'] = $this->Users_model->get_users();;
		$this->load->view('profile', $data);
		}
		else
		{
			redirect('/');
		}	
	}

	public function process_logoff()
	{
		$this->session->sess_destroy();
		redirect("/");
	}
	
}