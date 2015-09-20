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


       

        public function signup1()
        {
            try{
                $crud = new grocery_CRUD();

                $crud->set_theme('sayapunyer');
                $crud->set_table('registration');
                $crud->required_fields('plat', 'kenderaan');
                // $crud->columns('plat', 'kenderaan');
                // $crud->add_fields('plat','kenderaan');
                // $crud->edit_fields('kenderaan');
                // $crud->unset_add();
                // $crud->unset_delete();
                // $crud->unset_edit();

                $output = $crud->render();


                $this->viewpage('v_crud', $output);

            }catch(Exception $e){
                show_error($e->getMessage().' --- '.$e->getTraceAsString());
            }
        }
        
    

        public function index()
    {
            $this->load->model('m_signup');
            $data['signup'] = $this->m_signup->get();
            $this->load->view('login/signup', $data);
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

