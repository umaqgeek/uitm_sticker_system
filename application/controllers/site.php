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
            $data['signup'] = $this->m_signup->getAll();
            $data['haha'] = "tata";
            $this->viewpage('v_signup', $data);
        }
        
        public function terimaForm()
        {
            $input = $this->input->post();
            unset($input['ic_no']);
            
            $array_temp = array(
                'bu_plat' => $input['bu_plat'],
                'name' => $input['name'],
                'username' => $input['username'],
                'password' => $input['password'],
                'phone_no' => $input['phone_no'],
                'email' => $input['email'],
                
            );
            
            
            redirect(site_url('site'));
        }
        
        public function antaForm()
        {
            $input = $this->input->post();
            $data['input'] = $input;
            $this->viewpage('v_formConfirm', $data);
        }
        
       
        
}