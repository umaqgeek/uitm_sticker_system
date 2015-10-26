<?php

class Users extends CI_Model
{
	function login($username, $password)
	{
		$this -> db -> select('u_id, u_username, u_password');
		$this -> db -> from('users');
		$this -> db -> where('u_username', $username);
		$this -> db -> where('u_password', md5($password));
		$this -> db -> limit(1);

		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
		{
			return $query -> result();
		}
		else
		{
			return false;
		}
	}
}
?>