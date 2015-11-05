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
            $this->load->model('m_aduan');
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

        private function viewpage2($page='v_menu1', $data=array())
        {
            echo $this->load->view('v_header', $data, true);
            echo $this->load->view($this->parent_page.'/v_menu1', $data, true);
            echo $this->load->view($this->parent_page.'/'.$page, $data, true);
            echo $this->load->view('v_footer', $data, true);
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

        public function contact()
        {
                $this->viewpage2();
                $this->load->view('site/contact');
        }

        public function aduan()
        {
                $this->viewpage2();
                $this->load->view('site/aduan');
        }

        public function aduanForm()
        {
            $this->load->library('form_validation');
           
            $this->form_validation->set_rules('komen', 'Komen', 'trim|required|max_length[125]');
            $this->form_validation->set_rules('ic', 'Nombor Kad Pengenalan', 'trim|required|max_length[25]');
            $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

            if ($this->form_validation->run() == FALSE)
            {

                $this->load->view('site/aduan');
                $this->viewpage2();
         
            }

            else  if ($query=$this->m_aduan->create_aduan())
            {
                $this->load->model('m_aduan');

                $data = array(
                        'status' => $this->input->post('status'),
                        'nama'=>$this->input->post('nama'),
                        'ic'=>$this->input->post('ic'),
                        'email'=>$this->input->post('email'),
                        'komen'=>$this->input->post('komen'),

            );
                $this->load->view('site/view_aduan',$data);
            }
        } 

        public function hubung()
        {
                $this->viewpage2();
                $this->load->view('site/hubung');
        }
        
        public function registration1()
        { 
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

        public function adminhome()
        {      

            $username = $this->input->post('username');
            $password = $this->input->post('password');
            

            $this->db->where('username',$username);
            $this->db->where('password',$password);
            $result=$this->db->get('admin');
            
            

            if ($result->num_rows() >0 )
            {
                   $this->viewpage1();
                   $this->load->view('admin/adminhome'); 
                   

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

