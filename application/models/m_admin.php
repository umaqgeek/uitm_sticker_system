<?php
  class m_admin extends CI_Model {
  	public function __construct()	{
  
}
	  
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

	  function show_register()
{
         
    $query = $this->db->get('registration');
    // $query_result = $query->result();
    return $query;
}

function show_register_id($data){
        $this->db->select('*');
        $this->db->from('registration');
        $this->db->where('register_id', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;  
    }

function update_register_id1($id,$data){
     $this->db->where('register_id', $id);
     $this->db->update('registration', $data);  
    }
	
  }

?>