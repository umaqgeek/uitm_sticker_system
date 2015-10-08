<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller 
{
      var $parent_page = "login";
      var $parent_page1 = "signup";

    public function __construct()
    {
           parent::__construct(); 
    }
       
       private function viewpage($page='v_mainpage', $data=array())
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

  public function register()
 {

            $username = $this->input->post('username');
            $password = $this->input->post('password');
            

            $this->db->where('username',$username);
            $this->db->where('password',$password);
            $result=$this->db->get('signup');

            if ($result->num_rows() > 0)
            {
                return $this->load->view('login/registration');
            }
            else
            {
                return $this->load->view('login/v_login');
            }





  // $this->load->helper(array('form', 'url'));

  //   $this->load->library('form_validation');
  //   $this->form_validation->set_rules('username', 'Username', 'required');
  //   $this->form_validation->set_rules('password', 'Password', 'required');

  //   if ($this->form_validation->run() == FALSE)
  //   {
  //     $this->load->view('login/v_login');
  //   }
  //   else
  //   {
  //     $this->load->view('login/registration');
  //   }
    $this->viewpage();

 }


public function signup()
 {
  $this->load->view('login/v_signup');
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
