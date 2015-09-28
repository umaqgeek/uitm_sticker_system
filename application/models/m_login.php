<?php
  class M_login extends CI_Model 
  {
  	public function __construct()
  	{
  		parent::__construct();
  	}
	
	public function newUser($ic_no, $name, $username, $password, $phone_no, $email)
	{
		$this -> db -> select('*');
		$this -> db -> from('users');
		$this -> db -> where('ic_no', $ic_no);
		$this -> db -> where('u_fullname', $fullname);
		$this -> db -> where('u_username', $username);
		$this -> db -> where('u_password', $password);
		$this -> db -> where('phone_no', $phone_no);
		$this -> db -> where('email', $email);
		$this -> db -> where('userType', $userType);
		$query = $this -> db -> get();

		return $query -> num_rows();
	}

	public function dataUser($username)
	{
		
		$this -> db -> select('u_username');
		$this -> db -> select('u_full_name');
		$this -> db -> where('u_username', $username);
		$query = $this -> db -> get('users');

		return $query -> row();
	}

	public function addUser()
	{
		$data = array(
						'ic_no' => $this->input->post('ic_no'),
						'u_fullname' => $this->input->post('u_fullname'),
						'u_username' => $this->input->post('u_username'),
						'phone_no' => $this->input->post('phone_no'),
						'email' => $this->input->post('email'),
						'u_password' => md5($this->input->post('u_password'))
						);
		$this->db->insert('users',$data);
     	return true;
	}
  }
?>