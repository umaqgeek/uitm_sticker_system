<?php

class m_kemaskini extends CI_Model{

	function show_plat_no($data){
		$this->db->select('*');
		$this->db->from('registration');
		$this->db->where('plat', $data);

		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

	function kemaskini($plat, $data){
		$this->db->where('plat', $plat);
		$this->db->update('registration', $data);
	}
	}
?>