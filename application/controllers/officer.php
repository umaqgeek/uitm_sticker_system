<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Officer extends MY_Controller 
{
        var $parent_page = "officer";

        function __construct()
    {
            parent::__construct();

            $this->load->model('m_officer'); 
             $this->load->model('m_registration');
    }

        public function officer1()
        { 

            // $username = $this->input->post('username');
            // $password = $this->input->post('password');
            // $this->db->where('username',$username);
            // $this->db->where('password',$password);
            // $usr_result = $this->db->get('admin');
            
           //  if($usr_result->num_rows()>0 )
           //  {
                

           //     $this->load->view('officer/officerhome');
           // }
           // else
           // {
           //  $this->load->view('login/v_login');
           //  $this->viewpage();
           //  }

           //     redirect('officer/home');
           // }
           // else
           // {
           //  $this->load->view('login/v_login');
           //  $this->viewpage();
           //  }

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
                        $result = $this->m_officer->login($data);

                            if($result == TRUE)
                                {
                                    $sess_array = array(
                                    'username' => $this->input->post('username')
                                    );

                            // Add user data in session
                                    $this->session->set_userdata('logged_in', $sess_array);
                                    $result = $this->m_officer->read_user_information($sess_array);
                                    if($result != false)
                                    {
                                        $data = array(
                                        // 'name' =>$result[0]->name,
                                        'username' =>$result[0]->username,
                                        'password' =>$result[0]->password
                                        );

                                        $this->load->view('officer/officerhome',$data);
                                        $this->viewpage('v_menu');
                                    }
                                }
                            }

        }


         public function index()

        {
                $this->load->view('login/v_login');
                $this->viewpage();
               
        }

        public function home()
        {
            if ( ! $this->session->userdata('logged_in'))
            {
            redirect(site_url('site'));
            }
                $this->load->view('officer/officerhome');
                $this->viewpage('v_menu');
               
        }


        public function login()

        {
                $this->load->view('officer/adminhome');
                $this->viewpage('v_menu');
                
               
        }

         public function aduan1()
        {
             $this->load->library('form_validation');
           
            $this->form_validation->set_rules('jenis', 'Jenis', 'trim|required');
            $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required');
            $this->form_validation->set_rules('message', 'Komen', 'trim|required');
            

            if ($this->form_validation->run() == FALSE)
            {
               $this->load->view('site/aduan');
                $this->viewpage();
         
            }

         else  if ($query=$this->m_aduan->create_data())
            {
                $this->load->model('m_aduan');
                $this->load->view('site/contact');
                $this->viewpage2();

            }             
        }





        //  public function registration()
        // {
      
        //         $crud = new grocery_CRUD();

        //         $crud->set_theme('sayapunyer');

        //         $crud->display_as('jenis','Status');
        //         $crud->display_as('plat','No Plat');
        //         $crud->display_as('ic','No Kad Pengenalan');
        //         $crud->display_as('telefon','Telefon Number');
        //         $crud->required_fields('jenis','plat','kenderaan','model','nama','ic','telefon','hubungan','lesen','kelas','cukai','waris','status');
        //         $crud->add_action('More', '', 'demo/action_more','ui-icon-plus');
        //         $crud->callback_add_field('telefon',array($this,'add_field_callback_1'));
        //        // $crud->unset_edit();
        //        // $crud->unset_delete();
               

        //         $output = $crud->render();

        //         $this->viewpage('v_crud', $output);
        // }

        //  function add_field_callback_1()
        // {
        //             return '+01 <input type="text" maxlength="50" value="" name="telefon" style="width:462px">';
        // }

        private function viewpage($page='v_mainpage', $data=array())
        {
            echo $this->load->view('v_header', $data, true);
            echo $this->load->view($this->parent_page.'/v_menu', $data, true);
            echo $this->load->view($this->parent_page.'/'.$page, $data, true);
            echo $this->load->view('v_footer', $data, true);
        }


        function logout()
        {
            $this->simpleloginsecure->logout();
            redirect('site');
        }


        function show_register_id() {
        $this->data['posts'] = $this->m_registration->getPosts(); // calling Post model method getPosts()
        $this->load->view('officer/posts_view', $this->data); // load the view file , we are passing $data array to view file
       $this->viewpage();
    }


    function update_register_id1() 
    {
        if ( ! $this->session->userdata('logged_in'))
            {
            redirect(site_url('site'));
            }
       $register_id= $this->input->post('register_id');
       $data = array(
           'nama' => $this->input->post('nama'),
            'jenis' => $this->input->post('jenis'),
            'status' => $this->input->post('status'),
            'kenderaan' => $this->input->post('kenderaan')
        );
       $this->m_registration->update_register_id1($register_id,$data);
       $this->show_register_id();
    }

    public function status()
        {
            if ( ! $this->session->userdata('logged_in'))
            {
            redirect(site_url('site'));
            }

            $this->viewpage('v_menu');
            $this->load->view('officer/bstatus');
        }

     public function userstatus()
        {
            if ( ! $this->session->userdata('logged_in'))
            {
            redirect(site_url('site'));
            }      

            $nama = $this->input->post('nama');
            $ic = $this->input->post('ic');

            if ($ic != "" && $nama != "") {
                $result = $this->m_registration->show_data_by_id($ic,$nama);
                if ($result != false) {
                $data['tunjuk'] = $result;
                } else {
                $data[''] = "No record found !";
                }
                $this->viewpage('v_menu');
                $this->load->view('officer/vstatus', $data);

                
            }
            
        }   

 }
?>


   