<?php
  class m_signup extends CI_Model {
	  
	  function get() 
	  {
		 $query = $this->db->get('signup');
		 return $query->result();

		} 
	  
	  
	  function add($data)
	   {
		  $this->db->insert('signup', $data);
			  return ; 
	  }

	  
	  
	  function edit($data)
	   {
		  $this->db->where('ic_no', 123456);
		  $this->db->update('signup', $data);
	  }
	  
	  function delete()
	   {
		  $this->db->where('ic_no', $this->url->segment(3));
		  $this->db->delete('signup');
	  }
	
  }

?>