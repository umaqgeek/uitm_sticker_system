<?php 
class Site extends MY_Controller 
{
      
        public function index()
	{
           $this->load->model('m_users');
           $data['records'] = $this->m_users->getAll();

           $this->load->view('home', $data);
       }
      } 