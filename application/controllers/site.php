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
                $crud->display_as('telefon','Telefon Number');
                $crud->required_fields('plat','kenderaan','model','engin','chasis','nama','warna','ic','telefon','hubungan','lesen','kelas','cukai','waris');
               $crud->callback_add_field('telefon',array($this,'add_field_callback_1'));
               $crud->unset_edit();
               $crud->unset_delete();
               

                $output = $crud->render();

                $this->viewpage('v_crud', $output);
        }

                function add_field_callback_1()
                {
                    return '+01 <input type="text" maxlength="50" value="" name="telefon" style="width:462px">';
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
                // $this->load->library('form_validation');
                // $this->form_validation->set_rules('name','Name','trim!required');
                // $this->form_validation->set_rules('password','Password','trim!required');
                // if($this->form_validation->run()==FALSE)
                // {
                //     $this->load->view('login/v_login');
                // }
                // else
                // {
                //     $this->load->view('login/registration');
                // }

                $this->load->view('login/v_login');
                $this->viewpage();
               
        }
        public function signup()
        {       $this->viewpage();
                $this->load->view('login/signup');
        }


        public function registration1()
        { 
        
               $this->load->view('site/registration',$data);
               $this->viewpage1($data);  
             
        }


        public function terimaForm()
        {
            
           $data = array(
            'status' => $this->input->post('status'),
            'ic_no' => $this->input->post('ic_no'),
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'phone_no' => $this->input->post('phone_no'),
            'email' => $this->input->post('email')

            );
           $CI->session->set_userdata('admin', $data);


            $this->m_signup->add($data);
            $this->load->view('login/v_login');
            $this->viewpage();

            
          

          }

        public function regisForm()
        {
            $data = array(
             'plat' => $this->input->post('plat'),
             'kenderaan' => $this->input->post('kenderaan'),
             'model' => $this->input->post('model'),
             'engin' => $this->input->post('engin'),
             'chasis' => $this->input->post('chasis'),
             'nama' => $this->input->post('nama'),
             'warna' => $this->input->post('warna'),
             'ic' => $this->input->post('ic'),
             'phone' => $this->input->post('phone'),
             'hubungan' => $this->input->post('hubungan'),
             'lesen' => $this->input->post('lesen'),
             'kelas' => $this->input->post('kelas'),
             'cukai' => $this->input->post('cukai'),
             'waris' => $this->input->post('waris')

                );
            $this->m_registration->add($data);
            $this->load->view('site/registration');
            $this->viewpage1();


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
            
            

            if ($result->num_rows() > 0 )
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

        public function admin()
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $this->db->where('username',$username);
            $this->db->where('password',$password);
            $usr_result = $this->db->get('signup');
            $username1 = $this->session->userdata('admin','username');
            $password1 = $this->session->userdata('12345','password');
            
            if($usr_result->num_rows()>0 && $username1=1)
            {
                // if($username1=1)
               $this->load->view('login/signup');
           }
           else
           {
            $this->load->view('login/v_login');

            }
            

               
        }

        public function admin1()
        {
            $this->registration();
        }

        function logout()
        {
            $this->simpleloginsecure->logout();
            redirect(site_url('site'));
        }

        
}

