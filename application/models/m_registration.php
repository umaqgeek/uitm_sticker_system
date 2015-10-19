<?php
  class m_registration extends CI_Model {

function create_register () {


	     $new_member_insert_data = array(
        'plat'=>$this->input->post('plat'),
        'kenderaan'=>$this->input->post('kenderaan'),
         'model'=>$this->input->post('model'),
         'engin'=>$this->input->post('engin'),
         'nama'=>$this->input->post('nama'),
         'warna'=>$this->input->post('warna'),
         'ic'=>$this->input->post('ic'),
         'phone'=>$this->input->post('phone'),
         'hubungan'=>$this->input->post('hubungan'),
         'lesen'=>$this->input->post('lesen'),
         'kelas'=>$this->input->post('kelas'),
         'cukai'=>$this->input->post('cukai'),
          'waris'=>$this->input->post('waris'),

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

}