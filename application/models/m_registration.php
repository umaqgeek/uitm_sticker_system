<?php
  class m_registration extends CI_Model {
	  
	  function get() 
	  {
		 $query = $this->db->get('registration');
		 return $query->result();

		} 
	  
	  
	  function add($data)
	   {
	   	  
		  $query=$this->db->insert('registration', $data);
		  return ;
		    
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