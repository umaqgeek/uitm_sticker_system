<?php
  class login extends CI_Model {
  	public function __construct()	{
  
}
	   
	public function login($data) {

		$condition = "username =" . "'" . $data['username'] . "' AND " . "password =" . "'" . $data['password'] . "'";
			$this->db->select('*');
			$this->db->from('login');
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
		$this->db->from('login');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
		return $query->result();
		} else {
		return false;
		}
		}

		function get($data) 
	  {
		 $query = $this->db->get('login');
		 return $query->result();

		} 
	  

}
?>