<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller 
{
        var $parent_page = "Main";
	function __construct()
	{
            parent::__construct(); 
	}
        
        private function viewpage($page='about', $data=array())
        {
            echo $this->load->view('v_header', $data, true);
            echo $this->load->view($this->parent_page.'/v_menu', $data, true);
            echo $this->load->view($this->parent_page.'/'.$page, $data, true);
            echo $this->load->view('v_footer', $data, true);
        }


        public function index()
	{

            $this->viewpage();
            
	}

	public function signin()
	{
		$this->viewpage('login');
	}

}
