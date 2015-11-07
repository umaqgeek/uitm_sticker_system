<?php
  class m_officer extends CI_Model {
  	public function __construct()	{
  
}
	  
	 //  function get() 
	 //  {

		//  $query = $this->db->get('admin');
		//  return $query->result();

		// } 
	  
	  
	 //  function add($data)
	 //   {

		//   $this->db->insert('admin', $data);
		//   return ; 
	 //  }

	  
	  
	 //  function edit($data)
	 //   {
		//   $this->db->where('ic_no', 123456);

		//   $this->db->update('admin', $data);

	 //  }
	  
	 //  function delete()
	 //   {
		//   $this->db->where('ic_no', $this->url->segment(3));

		//   $this->db->delete('admin');
	 //  }

	 //  public function dataPengguna($username)
	 //  {
	 //  	$this->db->select('ic_no');
	 //  	$this->db->select('nama');
	 //  	$this->db->select('phone_no');
	 //  	$this->db->select('email');
	 //  	$query = $this->db->get('signup');

	 //  	return $query->row();
	 //  }

	 public function login($data) {

		$condition = "username =" . "'" . $data['username'] . "' AND " . "password =" . "'" . $data['password'] . "'";
			$this->db->select('*');
			$this->db->from('admin');
			$this->db->where($condition);
			$this->db->limit(1);
			$query = $this->db->get();

			if ($query->num_rows() == 1) {
			return true;
			} else {
			return false;
			}
			}

		// Read data from database to show data in admin page
		public function read_user_information($sess_array) {

		$condition = "username =" . "'" . $sess_array['username'] . "'";
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
		return $query->result();
		} else {
		return false;
		}
		}
  }

?>