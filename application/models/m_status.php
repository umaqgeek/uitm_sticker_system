<?php

class m_status extends CI_Model{

	function show_status(){
		$query = $this->db->get('registration');
		$query_result = $query->result();
		return $query_result;
	}


	function show_status_plat($data){
		$this->db->select('*');
		$this->db->from('registration');
		$this->db->where('plat', $data);

		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

	function show_status_plat1($plat, $data){
		$this->db->where('plat', $plat);
		$this->db->update('registration', $data);
	}
	}
?>