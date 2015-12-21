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

function get_All_Users(){

        $query = $this->db->get('registration');
        if($query->num_rows() > 0){
            foreach($query->result() as $row) {
                $data[]=$row;
            }
        }
        return $data;
    }


    function insert_users($data){
        $query = $this->db->insert('registration', $data);
        return;


    }

    function update_users($data){
        // update code...
    }




function getPosts(){
  $this->db->select("*");
  $this->db->from('registration');
  $query = $this->db->get();
  return $query->result();
}

function show_register_id(){
        $this->db->select('*');
        $this->db->from('registration');
        $query = $this->db->get();
        $result = $query->result();
        return $result;  
    }

function update_register_id1($register_id,$data){
     $this->db->where('register_id', $register_id);
     $this->db->update('registration', $data);  
    }

// function getstatus(){
//   $this->db->select("ic,nama");
//   $this->db->from('registration');
//   $query = $this->db->get();
//   return $query->result();
// }

// function showstatus($data){
//         $this->db->select('*');
//         $this->db->from('registration');
//         $this->db->where('register_id', $data);
//         $query = $this->db->get();
//         $result = $query->result();
//         return $result;  
// }

public function show_data_by_id($ic,$nama) {
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
