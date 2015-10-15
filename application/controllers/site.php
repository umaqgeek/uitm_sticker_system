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

        private function viewpage1($page='v_menu', $data=array())
        {
            echo $this->load->view('v_header', $data, true);
            echo $this->load->view($this->parent_page.'/v_menu', $data, true);
            echo $this->load->view($this->parent_page.'/'.$page, $data, true);
            echo $this->load->view('v_footer', $data, true);
        }


       
        public function registration()
        {
      
                $crud = new grocery_CRUD();

                $crud->set_theme('sayapunyer');

                $crud->display_as('plat','No Plat');
                $crud->display_as('ic','No Kad Pengenalan');
                $crud->display_as('phone','Telefon Number');
                $crud->required_fields('plat','kenderaan','model','engin','chasis','nama','warna','ic','phone','hubungan','lesen','kelas','cukai','waris');
               $crud->callback_add_field('phone',array($this,'add_field_callback_1'));
               $crud->unset_edit();
               $crud->unset_delete();
               

                $output = $crud->render();

                $this->viewpage('v_crud', $output);
        }

                function add_field_callback_1()
                {
                    return '+01 <input type="text" maxlength="50" value="" name="phone" style="width:462px">';
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
                $this->load->view('site/result');
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

            $username = $this->input->post('username');
            $password = $this->input->post('password');
            

            $this->db->where('username',$username);
            $this->db->where('password',$password);
            $result=$this->db->get('signup');
            
            

            if ($result->num_rows() >0 )
            {
                   $this->viewpage1();
                   $this->load->view('site/registration'); 
                   
            }
            else
            {
                $this->viewpage();
                return $this->load->view('login/v_login');


            }


        }


        function logout()
        {
            $this->simpleloginsecure->logout();
            redirect(site_url('site'));
        }

        
}

