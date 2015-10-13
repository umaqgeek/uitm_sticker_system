<?php 
session_start();

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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

        private function viewpage1($page='v_menu', $data=array())
        {
            echo $this->load->view('v_header', $data, true);
            echo $this->load->view($this->parent_page.'/v_menu', $data, true);
            echo $this->load->view($this->parent_page.'/'.$page, $data, true);
            echo $this->load->view('v_footer', $data, true);
        }

            
          public function signup1()
        {
                $crud = new grocery_CRUD();

                $crud->set_theme('sayapunyer');
                $crud->set_table('signup');
                $crud->display_as('ic_no','No Kad Pengenalan');
                $crud->display_as('phone_no','Telefon Number');
                $crud->required_fields('ic_no','name','username','password','phone_no','email');
                $crud->callback_add_field('phone_no',array($this,'add_field_callback_2'));
                $crud->unset_edit();
                $crud->unset_delete();
               

                // $crud->required_fields('plat', 'kenderaan');
                // // $crud->columns('plat', 'kenderaan');
                // // $crud->add_fields('plat','kenderaan');
                // // $crud->edit_fields('kenderaan');
                // // $crud->unset_add();
                // // $crud->unset_delete();
 

                $output = $crud->render();


                $this->viewpage('v_crud', $output);

            }

                function add_field_callback_2()
                {
                    return '+01 <input type="text" maxlength="50" value="" name="phone_no" style="width:462px">';
                }
            
        
    

        public function index()

        {      

                $this->load->view('login/v_login');
                $this->viewpage();
               
        }
        public function signup()
        {       $this->viewpage();
                $this->load->view('site/signup');
        }


        public function registration1()
        { 
        
               $this->load->view('site/registration',$data);
               $this->viewpage1($data);  
             
        }


        public function signForm()
        {

            
            $this->load->library('form_validation');
           
            $this->form_validation->set_rules('ic_no', 'No Kad Pengenalan', 'trim|required|min_length[12]');
            $this->form_validation->set_rules('username', 'username', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            $this->form_validation->set_rules('phone_no', 'No Phone', 'trim|required|min_length[10]');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

            if ($this->form_validation->run() == FALSE)
            {

               $this->load->view('site/signup');
                $this->viewpage();
         
            }

            else  if ($query=$this->m_signup->create_member())
            {
                $this->load->model('m_signup');
                $this->load->view('login/v_login');
                $this->viewpage();
            }

            
          

          }

        public function regisForm()
        {
            $this->load->library('form_validation');
           
            $this->form_validation->set_rules('plat', 'No Plat Kenderaan', 'trim|required|min_length[7]');
            $this->form_validation->set_rules('engin', 'No Engin', 'trim|required');
            $this->form_validation->set_rules('chasis', 'No Chasis', 'trim|required');
            $this->form_validation->set_rules('warna', 'Warna Kenderaan', 'trim|required');
            $this->form_validation->set_rules('ic', 'No IC Pemilik', 'trim|required|min_length[12]');
            $this->form_validation->set_rules('cukai', 'No Cukai Jalan', 'trim|required');
            $this->form_validation->set_rules('waris', 'No Waris Terdekat', 'trim|required|min_length[10]');
            

            if ($this->form_validation->run() == FALSE)
            {

               $this->load->view('site/registration');
                $this->viewpage1();
         
            }

            else  if ($query=$this->m_registration->create_register())
            {
                $this->load->model('m_registration');
                $this->load->view('site/registration');
                $this->viewpage();
            }
          

        } 
            
        
        public function antaForm()
        {


            $input = $this->input->post();
            $data['input'] = $input;
            $this->load->view('login/v_login', $data);
        }

         public function register()
        {      

           

            $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

            if ($this->form_validation->run() == FALSE) 
            {

                if(isset($this->session->userdata['logged_in']))
                {
                    redirect('site');
                }
                else
                {
                    $this->load->view('login/v_login');
                    $this->viewpage();
                }
            }
             else 
             {
                $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
                );
                $result = $this->m_signup->login($data);
                if ($result == TRUE) 
                {

                    $username = $this->input->post('username');
                    $result = $this->m_signup->read_user_information($username);
                    if ($result != false)
                     {
                        $session_data = array(
                        'username' => $result[0]->username,
                        'password' => $result[0]->password,
                            );
            // Add user data in session
                        $this->session->set_userdata('logged_in', $session_data);
                        $this->viewpage1();
                        $this->load->view('site/registration'); 
                    }
                }
                else 
                {
                    $data = array(
                    'error_message' => 'Invalid Username or Password'
                        );

                    $this->load->view('login/v_login', $data);
                    $this->viewpage();

                }
            }



        }


        function logout()
        {
            $this->simpleloginsecure->logout();
            redirect(site_url('site'));
        }

        
}

