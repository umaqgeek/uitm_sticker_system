<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->view('v_main_page');
	}
<<<<<<< HEAD

	private function viewpage($page='v_main_page', $data=array())
    {
        echo $this->load->view('v_header', $data, true);
        echo $this->load->view($this->parent_page.'/v_menu', $data, true);
        echo $this->load->view($this->parent_page.'/'.$page, $data, true);
        echo $this->load->view('v_footer', $data, true);
    }
=======
>>>>>>> ce4ee0797237a6557b4099f6f3a89e66a44a3574
}
