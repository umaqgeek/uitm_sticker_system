<?php
  class m_registration extends CI_Model {
	  
	  function get() 
	  {
		 $query = $this->db->get('registration');
		 return $query->result();

		} 
	  
	  
	  function add($data)
	   {
	   	  
		  $this->db->insert('registration', $data);
		  return $this->load->view('site/registration');
		  return $this->load->view('site/v_menu');
	  }

	  
	  
	  function edit($data)
	   {
		  $this->db->where('ic', 123456);
		  $this->db->update('registration', $data);
	  }
	  
	  function delete()
	   {
		  $this->db->where('ic', $this->url->segment(3));
		  $this->db->delete('registration');
	  }
	
  }

?>