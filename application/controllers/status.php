<?php

class status extends CI_Controller{
	function __construct(){
		parent::__construct();

		$this->load->model('m_status');
	}

	  public function status()
        {
            if ( ! $this->session->userdata('logged_in'))
            {
            redirect(site_url('site'));
            }

            $this->viewpage('v_menu');
            $this->load->view('officer/bstatus');
        }

	function show_status_plat() {
		 if ( ! $this->session->userdata('logged_in'))
            {
            redirect(site_url('site'));
            }
		$id = $this->uri->segment(3);
		$data['register'] = $this->m_status->show_status();
		$data['single_register'] = $this->m_status->show_status_plat($plat);
		$this->load->view['status/v_status', $data];
	}

	function show_status_plat1() {
		$plat = $this->input->post('$plat');
		$data = array (
			'nama' => $this->input->post('nama'),
            'kenderaan' => $this->input->post('kenderaan'),
        	'model' => $this->input->post('model'),
        	'ic' => $this->input->post('ic'),
        	'phone' => $this->input->post('phone'),
        	'hubungan' => $this->input->post('hubungan'),
        	'lesen' => $this->input->post('lesen'),
       		'kelas'=> $this->input->post('kelas'),
        	'cukai' => $this->input->post('cukai'),
      		'waris' => $this->input->post('waris')
        );

        $this->m_status->show_status_plat1($plat, $data);
        $this->show_status_plat();
        redirect('registration');
	}

	public function index()

        {
                $this->load->view('login/v_login');
                $this->viewpage();
               
        }

        public function home()
        {
            if ( ! $this->session->userdata('logged_in'))
            {
            redirect(site_url('site'));
            }
                $this->load->view('officer/officerhome');
                $this->viewpage('v_menu');
               
        }
}	
