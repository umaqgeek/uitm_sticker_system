<?php
  class m_registration extends CI_Model {

function create_register () {


	     $new_member_insert_data = array(
        'jenis' => $this->input->post('jenis'),
        'plat'=>$this->input->post('plat'),
        'kenderaan'=>$this->input->post('kenderaan'),
         'model'=>$this->input->post('model'),
         'nama'=>$this->input->post('nama'),
         'ic'=>$this->input->post('ic'),
         'phone'=>$this->input->post('phone'),
         'hubungan'=>$this->input->post('hubungan'),
         'lesen'=>$this->input->post('lesen'),
         'kelas'=>$this->input->post('kelas'),
         'cukai'=>$this->input->post('cukai'),
          'waris'=>$this->input->post('waris'),
          'status'=>$this->input->post('status'),
          'code'=>$this->input->post('code'),

            );

            $insert = $this->db->insert('registration', $new_member_insert_data);
            return $insert;


}


function getPosts(){
  $this->db->select("register_id,nama");
  $this->db->from('registration');
  $query = $this->db->get();
  return $query->result();
}

function show_register_id($data){
        $this->db->select('*');
        $this->db->from('registration');
        $this->db->where('register_id', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;  
    }

function update_register_id1($register_id,$data){
     $this->db->where('register_id', $register_id);
     $this->db->update('registration', $data);  
    }


public function show_data_by_id($nama) {
        $condition = "nama =" . "'" . $nama ."'"  ;
        $this->db->select('*');
        $this->db->from('registration');
        $this->db->where($condition);
        $this->db->limit(2);
        $query = $this->db->get();
        if ($query->num_rows() == 2) {
            return $query->result();
            } else {
                return false;
            }

        return $query->result();
        }

public function updatestatus($ic,$nama) {
        $condition = "ic =" . "'" . $ic . "' AND " . "nama =" . "'" . $nama . "'";
        $this->db->select('*');
        $this->db->from('registration');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
            } else {
                return false;
            }
        }

}

?>
