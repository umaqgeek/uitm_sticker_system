<?php
  class m_registration extends CI_Model {

function registration () {
	  $data = array(
        'plat'=>$this->input->post('plat'),
        'kenderaan'=>$this->input->post('kenderaan'),
         'model'=>$this->input->post('model'),
         'engin'=>$this->input->post('engin'),
         'chasis'=>$this->input->post('chasis'),
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

            $insert = $this->db->insert('registration', $data);
            return $insert;


}

}