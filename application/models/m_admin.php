<?php
  class m_admin extends CI_Model {
	  
	  function get() 
	  {
		 $query = $this->db->get('admin');
		 return $query->result();

		} 
	  
	  
	  function add($data)
	   {
		  $this->db->insert('admin', $data);
			  return ; 
	  }

	  
	  
	  function edit($data)
	   {
		  $this->db->where('ic_no', 123456);
		  $this->db->update('admin', $data);
	  }
	  
	  function delete()
	   {
		  $this->db->where('ic_no', $this->url->segment(3));
		  $this->db->delete('admin');
	  }
	
  }

?>