<?php 
session_start();

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends MY_Controller 
{
        var $parent_page = "site";
        
    function __construct()
    {

            parent::__construct(); 
            $this->load->database();
            $this->load->model('m_registration');
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
               

                $output = $crud->render();


                $this->viewpage('v_crud', $output);

            }

                function add_field_callback_2()
                {
                    return '+01 <input type="text" maxlength="50" value="" name="phone_no" style="width:462px">';
                }
            
        
    

        public function index()

        {
        
            $username = $this->session->userdata('username');

            //Pass it in an array to your view like
            $data['username']=$username;   

                $this->load->view('login/v_login',$data);
                $this->viewpage();
               
        }

         
        public function signup()
        {       $this->viewpage();
                $this->load->view('site/signup');
        }


        public function registration1()
        { 
        
               $this->load->view('site/registration');
               $this->viewpage1();  
             
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
                redirect('site/profile');
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


                    if ($this->form_validation->run() == FALSE) {
                    $this->load->view('login/v_login');
                    $this->viewpage();
                    } else {
                    $data = array(
                    'username' => $this->input->post('username'),
                    'password' => $this->input->post('password')
                    );
                    $result = $this->m_signup->login($data);
                    if($result == TRUE){
                    $sess_array = array(
                    'username' => $this->input->post('username')
                    );

                    // Add user data in session
                    $this->session->set_userdata('logged_in', $sess_array);
                    $result = $this->m_signup->read_user_information($sess_array);
                    if($result != false){
                    $data = array(
                    // 'name' =>$result[0]->name,
                    'username' =>$result[0]->username,
                    'password' =>$result[0]->password
                    );

                        $this->load->view('site/registration',$data);
                        $this->viewpage1();
                    }
                    }else{
                    $data = array(
                    'error_message' => 'Invalid Username or Password'
                    );
                    $this->load->view('login/v_login', $data);
                    $this->viewpage();
                    }
                    }

                    
            }

            public function profile()
{
         // in data array key name should be same which you will pass to view
         $nama = $this->uri->segment(3);    
         $data['row'] = $this->m_registration->my_data($nama);

        $this->load->view('site/view_register', $data);
        $this->viewpage1();
}


        function logout()
        {
            $this->simpleloginsecure->logout();
            redirect(site_url('site'));
        }


        
}

