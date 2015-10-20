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

            );

            $insert = $this->db->insert('registration', $new_member_insert_data);
            return $insert;


}



}

?>