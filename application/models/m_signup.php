<?php
  class m_signup extends CI_Model {
	  
	  function create_member() 
	  {
		 
	   
           $new_member_insert_data = array(
            
            'ic_no' => $this->input->post('ic_no'),
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'phone_no' => $this->input->post('phone_no'),
            'email' => $this->input->post('email'),


            );


           $insert = $this->db->insert('signup', $new_member_insert_data);
           return $insert;
            
  }

  function check_if_username_exists($username){

  	$this->db->where('username', $username);
  	$result = $this->db->get('signup');

  	if($result->num_rows() > 0){
  		return FALSE;
  	}

  	else {
  		return TRUE;
  	}
  }

   function check_if_email_exists($email){

  	$this->db->where('email', $email);
  	$result = $this->db->get('signup');

  	if($result->num_rows() > 0){
  		return FALSE;
  	}

  	else {
  		return TRUE;
  	}
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
		public function read_user_information($sess_array) {

		$condition = "username =" . "'" . $sess_array['username'] . "'";
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

		
		function show_students(){
$query = $this->db->get('signup');
$query_result = $query->result();
return $query_result;
}
// Function To Fetch Selected Student Record
function show_student_id($data){
$this->db->select('*');
$this->db->from('signup');
$this->db->where('signup_id', $data);
$query = $this->db->get();
$result = $query->result();
return $result;
}





}

?>