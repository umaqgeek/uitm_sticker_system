<?php
  class login_model extends CI_Model {
  	public function __construct()	{
  
}

		// function background($data_back)
		// {
			
		// 	$insert = $this->db->insert('background', $data_back);
  //          return $insert;
		// }

		function get($data) 
	  {
		 $query = $this->db->get('login');
		 return $query->result();

		}

		function get_back()
		{
			$this->db->select('*');
			$this->db->from('background');
			$query = $this->db->get();
			return $query->result();
		}

		function insert_images($image_data = array()){
      $data = array(
          'userfile' => $image_data['file_name'],
          'title' => $this->input->post('title'),
           'background' => $this->input->post('background'),
          // 'fullpath' => $image_data['full_path']
      );
      $this->db->insert('background', $data);
} 
	  

}
?>