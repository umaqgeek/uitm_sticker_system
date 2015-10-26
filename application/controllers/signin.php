<?php 

class Signin extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    
    $this->load->model('m_login');
    
    $this->load->library(array('form_validation','session'));
    
    $this->load->database();
    
    $this->load->helper('url');

    $this->load->library('Grocery_CRUD');
    
  }
  
  public function index()
  {
    $session = $this->session->userdata('isLogin');
    
      if($session == FALSE)
      {
        redirect('signin/loginForm');
      }
      else
      {
        redirect('site');
      }
  }
    
  public function loginForm()
  {
    $this->form_validation->set_rules('u_username', 'Username', 'required|trim|xss_clean');
    $this->form_validation->set_rules('u_password', 'Password', 'required|md5|xss_clean');
    $this->form_validation->set_error_delimiters('<span class="error">', '</span>');
    
      if($this->form_validation->run()==FALSE)
      {
        $this->load->view('formLogin');
      }else
      {
       $username = $this->input->post('u_username');
       $password = $this->input->post('u_password');
       $userType = $this->input->post('userType');
       
       $check = $this->m_login->newUser($username, $password, 1, $userType);
        
        if($check <> 0)
        {
          $this->session->set_userdata('isLogin', TRUE);
          $this->session->set_userdata('username',$username);
          $this->session->set_userdata('userType',$userType);
         
         redirect('site');
        }else
        {
         echo " <script>
                alert('Fail to Login: Please check your username , password and your user type');
                history.go(-1);
              </script>";        
        }
      }  
  }

  public function register()
 {
  $this->load->view('formRegistration');//loads the register_view.php file in views folder
 }
  
  public function registration()
 {
  $this->load->library('form_validation');
  // field name, error message, validation rules
  $this->form_validation->set_rules('ic_no', 'Ic No', 'trim|required|min_length[5]|xss_clean');
  //$this->form_validation->set_rules('full_name', 'Full Name', 'trim|required|min_length[5]|xss_clean');
  $this->form_validation->set_rules('phone_no', 'Phone Number', 'trim|required|min_length[5]|xss_clean');
  $this->form_validation->set_rules('u_username', 'User Name', 'trim|required|min_length[4]|xss_clean');
  $this->form_validation->set_rules('u_email', 'Your Email', 'trim|required|valid_email');
  $this->form_validation->set_rules('u_password', 'Password', 'trim|required|min_length[4]|max_length[32]');
  $this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');


  if($this->form_validation->run() == FALSE)
  {
   
    $this->load->view('v_registration');
  }
  else
  {
   $this->m_login->add_user();
   //$this->thank();
   $this->load->view('success');
  }
 }
 
  public function logout()
  {
   $this->session->sess_destroy();
   
   redirect('signin/loginForm');
  }  

   public function user()
   {
        $this->grocery_crud->set_table('users');
        $output = $this->grocery_crud->render();        

        $this->_example_output($output);   
    }

    public function users()
   {
       $this->grocery_crud->set_table('users');
       $output = $this->grocery_crud->render();
 
        

         $this->_example_output($output);   
    }
}

?>