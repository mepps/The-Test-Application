<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

	function get_users()
	{
		$query = $this->db->get('users');
		return $query->result();
	}


	function register_user()
	{
		if (count($this->get_users()) == 0)
		{
			$this->db->set('admin_level', 9);
		}
		else
		{
			$this->db->set('admin_level', 7);
		}
		$new_user = $this->input->post();
		$new_user['password'] = $this->encrypt->sha1($new_user['password']);
		$user_data = array(
			'email' => $new_user['email'],
			'first_name' => $new_user['first_name'],
			'last_name' => $new_user['last_name'],
			'password' => $new_user['password'],
			);
		$this->db->set($user_data);
		$this->db->set('created_at', 'NOW()', FALSE);
		$this->db->insert('users');
	}

	function login_user()
	{
		$this->db->where(array('email' => $this->input->post('email')));
		$this->db->where(array('password' => $this->encrypt->sha1($this->input->post('password'))));
	
		$users = $this->db->get('users');
		if ($users->num_rows()>0)
		{
			$data = $users->first_row();
			return $data;
		}
		else
		{
			return false;
		}
	}



}