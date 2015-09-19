<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends MY_Controller 
{
        var $parent_page = "site";
	function __construct()
	{
            parent::__construct(); 
	}


    private function viewpage($page='v_mainpage', $data=array())
        {
            echo $this->load->view('v_header', $data, true);
            echo $this->load->view($this->parent_page.'/v_menu', $data, true);
            echo $this->load->view($this->parent_page.'/'.$page, $data, true);
            echo $this->load->view('v_footer', $data, true);
        }
        
        


        public function index()
	{
            $this->load->model('m_signup');
            $data['signup'] = $this->m_signup->get();
            $this->load->view('login/signup', $data);
        }
        
        public function terimaForm()
        {
           $data = array(
            'ic_no' => $this->input->post('ic_no'),
            'name' => $this->input->post('name'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'phone_no' => $this->input->post('phone_no'),
            'email' => $this->input->post('email'),

            );

            $this->m_signup->add($data);
            $this->load->view('login/v_login', $data);

          } 
            
        
        public function antaForm()
        {


            $input = $this->input->post();
            $data['input'] = $input;
            $this->load->view('login/v_login', $data);
        }
        
       
        
}

