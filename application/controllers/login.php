<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller 
{
      var $parent_page = "login";
      var $parent_page1 = "signup";

    public function __construct()
    {
           parent::__construct(); 

           // $this->load->view('v_login');

           // $this->load->library(array('form_validation', 'session'));

           // $this->load->database();

           // $this->load->helper('url');

           // $this->load->library('grocery_CRUD');
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

  //       $session = $this->session->userdata('isLogin');

  //       if($session == FALSE)
  //       {
  //         redirect('login/login_form');
  //       }
  //       else
  //       {
  //         redirect('site');
  //       }
  //      }

  //      public function login_form()
  //      {
  //       $this->form_validation->set_rules('username', 'Username', 'required|trim|xss_clean');
  //       $this->form_validation->set_rules('password', 'Password', 'required|md5|xss_clean');
  //       $this->form_validation->set_error_delimiters('<span class="error">', '</span>');
    
  //       if($this->form_validation->run()==FALSE)
  //       {
  //         $this->load->view('form_login');
  //       }
  //       else
  //       {
  //         $username = $this->input->post('username');
  //         $password = $this->input->post('password');
       
  //         $check = $this->v_login->guess($username, $password);
  //       }

  //       if($check <> 0)
  //       {
  //         $this->session->set_userdata('isLogin', TRUE);
  //         $this->session->set_userdata('username',$username);
         
  //        redirect('site');
  //       }
  //       else
  //       {
  //        echo " <script>
  //               alert('Failed to Login: Please Check your username and password');
  //               history.go(-1);
  //             </script>";        
  //       }
  //     }  
      }

  public function register()
 {
  $this->load->view('login/registration');
 }



 public function signup1()
        {
            try{
                $crud = new grocery_CRUD();

                $crud->set_theme('sayapunyer');
                $crud->set_table('registration');
                $crud->required_fields('plat', 'kenderaan');
                // $crud->columns('plat', 'kenderaan');
                // $crud->add_fields('plat','kenderaan');
                // $crud->edit_fields('kenderaan');
                // $crud->unset_add();
                // $crud->unset_delete();
                // $crud->unset_edit();

                $output = $crud->render();


                $this->viewpage('v_crud', $output);

            }catch(Exception $e){
                show_error($e->getMessage().' --- '.$e->getTraceAsString());
            }
        } 
      }?>
 
  <!-- // public function logout()
  // {
  //  $this->session->sess_destroy();
   
  //  redirect('login/login_form');
  // }  

  //  public function user()
  //  {
  //       $this->grocery_crud->set_table('users');
  //       $output = $this->grocery_crud->render();        

  //       $this->_example_output($output);   
  //  }   -->