<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller 
{
       var $parent_page = "login";
       var $parent_page1 = "signup";

    function __construct()
    {
           parent::__construct(); 
    }
       
       private function viewpage($page='v_login', $data=array())
       {
           echo $this->load->view('v_header', $data, true);
           echo $this->load->view('v_menu', $data, true);
           echo $this->load->view($this->parent_page.'/'.$page, $data, true);
           echo $this->load->view('v_footer', $data, true);
       }

       private function viewpage1($page='signup', $data=array())
       {
           echo $this->load->view('v_header', $data, true);
           echo $this->load->view('v_menu', $data, true);
           echo $this->load->view($this->parent_page1.'/'.$page, $data, true);
           echo $this->load->view('v_footer', $data, true);
       }

       public function index()
       {
           $this->viewpage();

       }

       public function signup()
       {
            $input = $this->input->post();
            $data['input'] = $input;
            $this->viewpage1('signup', $data);
          
       }

       public function registration ()
       {
            $input = $this->input->post();
            $data['input'] = $input;
            $this->viewpage('registration', $data); 

       }

       function checksignup()
       {
          $input = $this->input->post();
          $data['input'] = 'signup';
          $this->viewpage1('signup', $data);
       }
       
       function checklogin()  //same with validate credential
       {
           $username = $this->input->post('username');
           $password = $this->input->post('password');
           
           $bol_login = $this->simpleloginsecure->login($username, $password);
           
           if ($bol_login) {
               redirect(site_url('users'));
           } else {
               redirect(site_url('login'));
           }
       }
       
       function logout()
       {
           $this->simpleloginsecure->logout();
           redirect(site_url('login'));
       }

}