<?php 

class Site extends CI_Controller
{

  var $parent_page = "site";

  public function __construct()
  {
    parent::__construct();
    
     $this->load->library(array('session'));
     
     $this->load->helper('url');
     
     $this->load->model('m_login');
    
     $this->load->database();
     
     
  }
  
      private function viewpage($page='view_mainpage', $data=array())
        {
            echo $this->load->view('v_header', $data, true);
            echo $this->load->view($this->parent_page.'/v_menu', $data, true);
            echo $this->load->view($this->parent_page.'/'.$page, $data, true);
            echo $this->load->view('v_footer', $data, true);

        }

  public function index()
  {
    $this->viewpage();

    // if($this->session->userdata('isLogin') == FALSE)
    // {
    //   redirect('signin/loginForm');
    // }else
    // {   
    //   $this->load->model('m_login');
      
    //   $user = $this->session->userdata('username');
      
    //   $data['userType'] = $this->session->userdata('userType');        
    //   $data['users'] = $this->m_login->dataUser($user);
      
    $this->load->view('v_home', $data);
    // }
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

            $this->m_login->newUser($data);
            $this->load->view('signin/formLogin', $data);

          } 
            
        
        public function antaForm()
        {
            $input = $this->input->post();
            $data['input'] = $input;
            $this->load->view('signin/formLogin', $data);
        }
  
}
?>
 