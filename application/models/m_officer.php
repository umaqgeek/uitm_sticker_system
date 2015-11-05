<?php
  class m_officer extends CI_Model {
  	public function __construct()	{
  
}
	  
	  function get() 
	  {
		 $query = $this->db->get('officer');
		 return $query->result();

		} 
	  
	  
	  function add($data)
	   {
		  $this->db->insert('officer', $data);
			  return ; 
	  }

	  
	  
	  function edit($data)
	   {
		  $this->db->where('ic_no', 123456);
		  $this->db->update('officer', $data);
	  }
	  
	  function delete()
	   {
		  $this->db->where('ic_no', $this->url->segment(3));
		  $this->db->delete('officer');
	  }


	  public function dataPengguna($username)
	  {
	  	$this->db->select('ic_no');
	  	$this->db->select('nama');
	  	$this->db->select('phone_no');
	  	$this->db->select('email');
	  	$query = $this->db->get('signup');

	  	return $query->row();
	  }

	
  }

?>