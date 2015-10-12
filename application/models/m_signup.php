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


            );

           $insert = $this->db->insert('signup', $new_member_insert_data);
           return $insert;
            
  }
}

?>