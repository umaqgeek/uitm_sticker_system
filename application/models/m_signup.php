<?php
  class m_signup extends CI_Model {
	  
	  function create_member() 
	  {
		 
	   
           $new_member_insert_data = array(
            'status' => $this->input->post('status'),
            'ic_no' => $this->input->post('ic_no'),
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'phone_no' => $this->input->post('phone_no'),
            'email' => $this->input->post('email'),


		 
	  
	  
	  // function add($data)
	  //  {
		 //  $this->db->insert('signup', $data);
			//   return ; 
	  // }

            );


           $insert = $this->db->insert('signup', $new_member_insert_data);
           return $insert;
            
  }

  public function login($data) {

	$condition = "username =" . "'" . $data['username'] . "' AND " . "password =" . "'" . $data['password'] . "'";
		$this->db->select('*');
		$this->db->from('signup');
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
		public function read_user_information($username) {

		$condition = "username =" . "'" . $username . "'";
		$this->db->select('*');
		$this->db->from('signup');
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