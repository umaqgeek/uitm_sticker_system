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
         
        {        $this->viewpage();
                $this->load->view('login/v_login');
        }
        public function signup()
        {       $this->viewpage();
                $this->load->view('login/signup');
        }

        public function terimaForm()
        {
           $data = array(
            'ic_no' => $this->input->post('ic_no'),
            'name' => $this->input->post('name'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'phone_no' => $this->input->post('phone_no'),
            'email' => $this->input->post('email'),

            );

            $this->m_signup->add($data);
            $this->load->view('login/v_login', $data);

          } 
            
        
        public function antaForm()
        {


            $input = $this->input->post();
            $data['input'] = $input;
            $this->load->view('login/v_login', $data);
        }
        
}

