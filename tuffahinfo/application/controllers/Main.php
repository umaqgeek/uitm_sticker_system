<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->view('v_main_page');
	}

	private function viewpage($page='v_main_page', $data=array())
    {
        echo $this->load->view('v_header', $data, true);
        echo $this->load->view($this->parent_page.'/v_menu', $data, true);
        echo $this->load->view($this->parent_page.'/'.$page, $data, true);
        echo $this->load->view('v_footer', $data, true);
    }
}
