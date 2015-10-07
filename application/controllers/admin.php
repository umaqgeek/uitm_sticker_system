<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MY_Controller 
{
        var $parent_page = "admin";

        function __construct()
    {
            parent::__construct(); 
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
                
               redirect('admin/registration');
           }
           else
           {
            $this->load->view('login/v_login');
            $this->viewpage();
            }
            

               
        }

         public function index()

        {  

                $this->load->view('login/v_login');
                $this->viewpage();
               
        }


         public function registration()
        {
      
                $crud = new grocery_CRUD();

                $crud->set_theme('sayapunyer');

                $crud->display_as('plat','No Plat');
                $crud->display_as('ic','No Kad Pengenalan');
                $crud->display_as('telefon','Telefon Number');
                $crud->required_fields('plat','kenderaan','model','engin','chasis','nama','warna','ic','telefon','hubungan','lesen','kelas','cukai','waris');
                $crud->add_action('More');
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

       








 }
?>