<?php
class admin_model extends CI_Model
{
	function search($limit, $offset)
	{
		//result query
		$q = $this->db->select('register_id, plat, kenderaan, model, engin, chasis, nama, warna, ic, telefon, hubungan, lesen, kelas, cukai, waris')
		     ->from('registration')
		     ->limit($limit, $offset);

		$ret['rows'] = $q->get()->result();

		// //count query
		// $q->$this->db->select('*')
		//   ->from('registration');

		// $tmp = $q->get()->result();

		// $ret['num_rows'] = $tmp[0]->count;
		// return $ret;
	}
}