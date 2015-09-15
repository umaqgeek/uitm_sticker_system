<?php

class Membership_model extends CI_Model {

	function validate()
	{
		$this->db->where('u_username', $this->input->post('u_username'));
		$this->db->where('u_password', md5($this->input->post('u_password')));
		$query = $this->db->get('users');

		if($query->num_rows == 1)
		{
			return true;
		}
	}

	function create_member()
	{
		$new_member_insert_data = array(
			'u_fullname' => $this->input->post('u_fullname'),
			'u_email' => $this->input->post('u_email'),
			'u_username' => $this->input->post('u_username'),
			'u_password' => md5($this->input->post('u_password'))
			);

		$insert = $this->db->insert('users', $new_member_insert_data);
		return $insert;
	}
}