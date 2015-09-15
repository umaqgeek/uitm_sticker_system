<?php

class Site_model extends CI_Model {

	function getAll() {
		$q = $this->db->get('test');
		
		
		foreach ($q->result() as $row)
		{
			$data[] = $row;
		}

		return $data;

class Site_model extends Model{

	function getAll(){
		$q = $this->db
	}
}