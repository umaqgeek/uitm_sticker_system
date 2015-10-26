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



       
        // public function registration()
        // {
      
        //         $crud = new grocery_CRUD();

        //         $crud->set_theme('sayapunyer');

        //         $crud->display_as('plat','No Plat');
        //         $crud->display_as('ic','No Kad Pengenalan');
        //         $crud->display_as('phone','Telefon Number');
        //         $crud->required_fields('plat','kenderaan','model','engin','chasis','nama','warna','ic','phone','hubungan','lesen','kelas','cukai','waris');
        //        $crud->callback_add_field('phone',array($this,'add_field_callback_1'));
        //        $crud->unset_edit();
        //        $crud->unset_delete();
               

        //         $output = $crud->render();

        //         $this->viewpage('v_crud', $output);
        // }

        //         function add_field_callback_1()
        //         {
        //             return '+01 <input type="text" maxlength="50" value="" name="phone" style="width:462px">';
        //         }

            
        //   public function signup1()
        // {
        //         $crud = new grocery_CRUD();

        //         $crud->set_theme('sayapunyer');
        //         $crud->set_table('signup');
        //         $crud->display_as('ic_no','No Kad Pengenalan');
        //         $crud->display_as('phone_no','Telefon Number');
        //         $crud->required_fields('ic_no','name','username','password','phone_no','email');
        //         $crud->callback_add_field('phone_no',array($this,'add_field_callback_2'));
        //         $crud->unset_edit();
        //         $crud->unset_delete();
               


                // $output = $crud->render();

        //         // $crud->required_fields('plat', 'kenderaan');
        //         // // $crud->columns('plat', 'kenderaan');
        //         // // $crud->add_fields('plat','kenderaan');
        //         // // $crud->edit_fields('kenderaan');
        //         // // $crud->unset_add();
        //         // // $crud->unset_delete();
 

        //         $output = $crud->render();



        //         $this->viewpage('v_crud', $output);

        //     }

        //         function add_field_callback_2()
        //         {
        //             return '+01 <input type="text" maxlength="50" value="" name="phone_no" style="width:462px">';
        //         }
              

        public function index()


        {
        
            $username = $this->session->userdata('username');

            //Pass it in an array to your view like
            $data['username']=$username;   

                $this->load->view('login/v_login',$data);

              
                // if($this->session->userdata('isLogin') == FALSE)
                // {
                //     redirect('login/v_login');
                //     $this->viewpage();
                // }else
                // {
                //     $this->load->model('m_signup');

                //     $user = $this->session->userdata('username');

                //     $data['status'] = $this->session->userdata('status');
                //     $data['pengguna'] = $this->m_signup->dataPengguna($signup);

                // }
                // $this->load->view('login/v_login');


                // $data['pengguna'] = $this->m_signup->create_member($signup1);

                $this->viewpage();
               
        }

         
        public function signup()
        {       $this->viewpage();
                $this->load->view('site/signup');
        }

        public function contact()
        {
                $this->viewpage();
                $this->load->view('contact');
        }
        
        public function registration1()
        { 
        

               // $this->load->view('site/registration');
               // $this->viewpage1();  

               $this->load->view('site/daftar',$data);
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

            $this->form_validation->set_rules('ic', 'No IC Pemilik', 'trim|required|min_length[12]');

            $this->form_validation->set_rules('cukai', 'No Cukai Jalan', 'trim|required');
            $this->form_validation->set_rules('waris', 'No Waris Terdekat', 'trim|required|min_length[10]');
            

            if ($this->form_validation->run() == FALSE)
            {

               $this->load->view('site/daftar');
                $this->viewpage1();
         
            }

            else  if ($query=$this->m_registration->create_register())
            {
                $this->load->model('m_registration');

                $data = array(
                        'jenis' => $this->input->post('jenis'),
                        'plat'=>$this->input->post('plat'),
                        'kenderaan'=>$this->input->post('kenderaan'),
                        'model'=>$this->input->post('model'),
                        'nama'=>$this->input->post('nama'),
                        'ic'=>$this->input->post('ic'),
                        'phone'=>$this->input->post('phone'),
                        'hubungan'=>$this->input->post('hubungan'),
                        'lesen'=>$this->input->post('lesen'),
                        'kelas'=>$this->input->post('kelas'),
                        'cukai'=>$this->input->post('cukai'),
                        'waris'=>$this->input->post('waris'),
                        'status'=>$this->input->post('status'),

            );
                $this->load->view('site/view_register',$data);
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
                        $this->load->view('login/v_login');
                        $this->viewpage();
                    } 
                    else 
                    {
                        $data = array(
                        'username' => $this->input->post('username'),
                        'password' => $this->input->post('password')
                        );
                        $result = $this->m_signup->login($data);

                            if($result == TRUE)
                                {
                                    $sess_array = array(
                                    'username' => $this->input->post('username')
                                    );

                            // Add user data in session
                                    $this->session->set_userdata('logged_in', $sess_array);
                                    $result = $this->m_signup->read_user_information($sess_array);
                                    if($result != false)
                                    {
                                        $data = array(
                                        // 'name' =>$result[0]->name,
                                        'username' =>$result[0]->username,
                                        'password' =>$result[0]->password
                                        );

                                        $this->load->view('site/userhome',$data);
                                        $this->viewpage1();
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

                    

         public function userhome()
        {      

            $username = $this->input->post('username');
            $password = $this->input->post('password');
            

            $this->db->where('username',$username);
            $this->db->where('password',$password);
            $result=$this->db->get('signup');
            
            

            if ($result->num_rows() >0 )
            {
                   $this->viewpage1();
                   $this->load->view('site/userhome'); 
                   

            }
        }


        public function daftar()
        {
            $this->viewpage1();
            $this->load->view('site/daftar');
        }

         public function status()
        {
            $this->viewpage1();
            $this->load->view('status/bstatus');
        }


         public function userstatus()
        {      

            // $nama = $this->input->post('nama');
            // $ic = $this->input->post('ic');
            

            // $this->db->where('nama',$nama);
            // $this->db->where('ic',$ic);
            // $result=$this->db->get('registration');
            
            

            // if ($result->num_rows() >0 )
            // {
            //        $register_id = $this->uri->segment(3);
            //         $data=$this->m_registration->getstatus();
            //         $data['register'] = $this->m_registration->getstatus();
            //         $data['single_register'] = $this->m_registration->show_register_id($register_id);
            //         $this->load->view('admin/admin', $data);
            //         $this->viewpage('v_menu');
                   

            // }

            $this->db->where('ic', $this->input->post('ic'),'nama',$this->input->post('nama'));
            $query = $this->db->get('registration');

            if ($query->num_rows() >0 )
            {
                $this->load->model('m_registration');
                $data=$this->m_registration->getstatus();
                $register_id = $this->uri->segment(3);
                $this->m_registration->showstatus($register_id);


              $data = array('jenis' => $this->input->post('jenis'),
                            'plat'=>$this->input->post('plat'),
                            'kenderaan'=>$this->input->post('kenderaan'),
                            'model'=>$this->input->post('model'),
                            'nama'=>$this->input->post('nama'),
                            'ic'=>$this->input->post('ic'),
                            'phone'=>$this->input->post('phone'),
                            'hubungan'=>$this->input->post('hubungan'),
                            'lesen'=>$this->input->post('lesen'),
                            'kelas'=>$this->input->post('kelas'),
                            'cukai'=>$this->input->post('cukai'),
                            'waris'=>$this->input->post('waris'),
                            'status'=>$this->input->post('status'),
            // 'register_id' => $query->row()->id
                            );
                $this->load->view('site/view_register', $data);  
            }
        
        }
















        function logout()
        {
            $this->simpleloginsecure->logout();
            redirect(site_url('site'));
        }


        
}

