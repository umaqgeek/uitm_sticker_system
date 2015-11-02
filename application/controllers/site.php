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

            // Pass it in an array to your view like
            $data['username']=$username;   

                $this->load->view('login/v_login',$data);


        {      

              

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

               // $this->load->view('site/daftar',$data);
               // $this->viewpage1($data);  

               // $this->load->view('site/registration');
               // $this->viewpage1();  

               $this->load->view('site/daftar',$data);
               $this->viewpage1($data);  

             
        }


        public function signForm()
        {


            $this->load->library('form_validation');
           
            $this->form_validation->set_rules('ic_no', 'No Kad Pengenalan', 'trim|required|min_length[12]');
            $this->form_validation->set_rules('username', 'username', 'trim|required|callback_check_if_username_exists');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            $this->form_validation->set_rules('phone_no', 'No Phone', 'trim|required|min_length[10]');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|callback_check_if_email_exists');

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

            function check_if_username_exists($requested_username) 
             {
                $this->load->model('m_signup');
                $username_available=$this->m_signup->check_if_username_exists($requested_username);

                if($username_available){

                    return TRUE;
                }

                else {

                     return FALSE;
                }
             }  

             function check_if_email_exists($requested_email) 
             {
                $this->load->model('m_signup');
                $email_available=$this->m_signup->check_if_email_exists($requested_email);

                if($email_available){

                    return TRUE;
                }

                else {

                     return FALSE;
                }
             }         
       

         

        public function regisForm()
        {
            $this->load->library('form_validation');
           
            $this->form_validation->set_rules('plat', 'No Plat Kenderaan', 'trim|required|min_length[7]|callback_check_if_plat_exists');

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

                $this->load->view('site/succesfulpage');
                $this->viewpage1();

                redirect('site');

            }

            

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


         public function result()

        {      
                $this->data['registration'] = $this->m_registration->getPosts();
                $this->load->view('site/result', $this->data);
                $this->viewpage();
               
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


         public function update()
        {
            $this->viewpage1();
            $this->load->view('update/bupdate');
        }


         public function userstatus()
        {      

            $nama = $this->input->post('nama');
            $ic = $this->input->post('ic');

            if ($ic != "" && $nama != "") {
                $result = $this->m_registration->show_data_by_id($ic,$nama);
                if ($result != false) {
                $data['tunjuk'] = $result;
                } else {
                $data[''] = "No record found !";
                }
                
                $this->load->view('status/vstatus', $data);
            }
            
        }

        public function updatestatus()
        {
            $nama = $this->input->post('nama');
            $ic = $this->input->post('ic');

            if ($ic != "" && $nama != "") {
                $result = $this->m_registration->updatestatus($ic,$nama);
                if ($result != false) {
                $data['update'] = $result;
                } else {
                $data[''] = "No record found !";
                }
                
                $this->load->view('update/update', $data);
            }
        }

        function update_register() {
       $register_id= $this->input->post('register_id');
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
                        'waris'=>$this->input->post('waris')
                        
        );
       $this->m_registration->update_register_id1($register_id,$data);
       $this->userhome();
    }


        function logout()
        {
            $this->simpleloginsecure->logout();
            redirect(site_url('site'));
        }


        
}

