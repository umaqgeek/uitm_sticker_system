<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MY_Controller 
{
        var $parent_page = "admin";

        function __construct()
    {
            parent::__construct();

            $this->load->model('m_admin'); 
    }

        public function admin1()
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $this->db->where('username',$username);
            $this->db->where('password',$password);
            $usr_result = $this->db->get('admin');
            
            if($usr_result->num_rows()>0 )
            {
                
               redirect('admin/show_register_id');
           }
           else
           {
            $this->load->view('login/v_login');
            $this->viewpage();
            }
            

               
        }

        // public function result()

        // {      
        //         $this->data['registration'] = $this->m_registration->getPosts();
        //         $this->load->view('site/result', $this->data);
        //         $this->viewpage();
               
        // }

         public function index()

        {
                $this->load->view('login/v_login');
                $this->viewpage();
               
        }


         public function registration()
        {
      
                $crud = new grocery_CRUD();

                $crud->set_theme('sayapunyer');

                $crud->display_as('jenis','Status');
                $crud->display_as('plat','No Plat');
                $crud->display_as('ic','No Kad Pengenalan');
                $crud->display_as('telefon','Telefon Number');
                $crud->required_fields('jenis','plat','kenderaan','model','nama','ic','telefon','hubungan','lesen','kelas','cukai','waris','status');
                $crud->add_action('More', '', 'demo/action_more','ui-icon-plus');
                $crud->callback_add_field('telefon',array($this,'add_field_callback_1'));
               // $crud->unset_edit();
               // $crud->unset_delete();
               

                $output = $crud->render();

                $this->viewpage('v_crud', $output);
        }

         function add_field_callback_1()
        {
                    return '+01 <input type="text" maxlength="50" value="" name="telefon" style="width:462px">';
        }

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
        //     $data = array();
        $register_id = $this->uri->segment(3);
        $data=$this->m_registration->getPosts();
        $data['register'] = $this->m_registration->getPosts();
        $data['single_register'] = $this->m_registration->show_register_id($register_id);
        $this->load->view('admin/admin', $data);
        $this->viewpage('v_menu');

       
    }

    function update_register_id1() {
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

 

 }
?>