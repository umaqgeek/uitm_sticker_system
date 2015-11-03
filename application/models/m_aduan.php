<?php
  class m_aduan extends CI_Model {

function create_aduan () {

	     $new_public_insert_data = array(
        'status' => $this->input->post('status'),
         'nama'=>$this->input->post('nama'),
         'email'=>$this->input->post('email'),
         'komen'=>$this->input->post('komen'),
        );

            $insert = $this->db->insert('aduan', $new_public_insert_data);
            return $insert;
}

function show_aduan_id($data){
        $this->db->select('*');
        $this->db->from('aduan');
        $this->db->where('aduan_id', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;  
    }

public function read_user_information($sess_array) {

        $condition = "nama =" . "'" . $sess_array['nama'] . "'";
        $this->db->select('*');
        $this->db->from('aduan');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
        return $query->result();
        } else {
        return false;
        }
        }

// function show_public(){
// $query = $this->db->get('aduan');
// $query_result = $query->result();
// return $query_result;
// }
// // Function To Fetch Selected Student Record
// function show_aduan_id($data){
// $this->db->select('*');
// $this->db->from('aduan');
// $this->db->where('aduan_id', $data);
// $query = $this->db->get();
// $result = $query->result();
// return $result;
// }

}

?>