<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller 
{
        var $parent_page = "Main";
	function __construct()
	{
            parent::__construct(); 
            $this->load->database();
	}
        
        private function viewpage($page='home', $data=array())
        {
            echo $this->load->view('v_header', $data, true);
            echo $this->load->view($this->parent_page.'/v_menu', $data, true);
            echo $this->load->view($this->parent_page.'/'.$page, $data, true);
            echo $this->load->view('v_footer', $data, true);
        }

        private function viewpage1($page='admin_menu', $data=array())
        {
            echo $this->load->view('v_header', $data, true);
            echo $this->load->view($this->parent_page.'/admin_menu', $data, true);
            echo $this->load->view($this->parent_page.'/'.$page, $data, true);
            // echo $this->load->view('v_footer', $data, true);
        }


        public function index()
	{

            $this->viewpage();
            
	}

	public function signin()
	{
		$this->viewpage('login');
	}

    public function login()
    {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $this->db->where('username',$username);
            $this->db->where('password',$password);
            $result=$this->db->get('login');

            if ($result->num_rows() > 0)
            {
                $this->viewpage1();
                return $this->load->view('Main/admin');   
            }
            else
            {
                return $this->viewpage('login');
            }

    }

     function logout()
        {
            $this->simpleloginsecure->logout();
            redirect(site_url('Main'));
        }
    
}
?>