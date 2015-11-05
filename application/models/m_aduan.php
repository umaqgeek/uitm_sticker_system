<?php
  class m_aduan extends CI_Model {
	  
	  function create_data() 
	  {
		 
	   
           $new_member_insert_data = array(
            
            'jenis' => $this->input->post('jenis'),
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'message' => $this->input->post('message'),
           

            );


           $insert = $this->db->insert('aduan', $new_member_insert_data);
           return $insert;
            
  }
}
?>