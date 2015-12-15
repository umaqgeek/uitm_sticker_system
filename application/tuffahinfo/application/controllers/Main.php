<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller 
{
        var $parent_page = "Main";
	function __construct()
	{
            parent::__construct(); 
            $this->load->database();
            $this->load->helper('form');
            $this->load->helper('url');
 
	}
        
        private function viewpage($page='home', $data=array())
        {
            echo $this->load->view('v_header', $data, true);
            echo $this->load->view($this->parent_page.'/v_menu', $data, true);
            echo $this->load->view($this->parent_page.'/'.$page, $data, true);
            echo $this->load->view('v_footer', $data, true);
        }

        private function viewpage1($page='admin_menu', $data=array())
        {
            echo $this->load->view('v_header', $data, true);
            echo $this->load->view($this->parent_page.'/admin_menu', $data, true);
            echo $this->load->view($this->parent_page.'/'.$page, $data, true);
            // echo $this->load->view('v_footer', $data, true);
        }


        public function index()
	{

            $this->viewpage();
            
	}

	public function signin()
	{
		$this->viewpage('login');
	}

    public function login()
    {

            $username = $this->input->post('username');
            $password = $this->input->post('password');
             $this->session->set_userdata('logged_in');
            $this->db->where('username',$username);
            $this->db->where('password',$password);
            $result=$this->db->get('login');

            if ($result->num_rows() > 0)
            {
                $this->viewpage1();
                return $this->load->view('Main/admin');   
            }
            else
            {
                return $this->viewpage('login');
            }

    }

    public function admin()
    { 
        $this->viewpage1('admin');
    }

    public function background()
    {
        $this->viewpage1('background');
    }

    public function back_input()
    {
      $data = array('title' => $this->input->post('title'),
                  'background' => $this->input->post('background'),
        );

      $this->login_model->background($data);
      redirect('Main/back_papar');
    }

    public function back_papar()
    {
      $this->login_model->get_back();
      $this->load->view('back_papar');
    }

    public function services()
    {
        $this->load->view('Main/services');
    }
       
    

     function logout()
        {
            $this->simpleloginsecure->logout();
            redirect(site_url('Main'));
        }





    
 
    
    //Upload Image function
 
    function uploadImage()
 
    {
 
 
    }
 
    //Create Thumbnail function
 
    function _createThumbnail($filename)
 
    {
 
        $config['image_library']    = "gd2";      
 
        $config['source_image']     = "assets/uploads/" .$filename;      
 
        $config['create_thumb']     = TRUE;      
 
        $config['maintain_ratio']   = TRUE;      
 
        $config['width'] = "80";      
 
        $config['height'] = "80";
 
        $this->load->library('image_lib',$config);
 
        if(!$this->image_lib->resize())
 
        {
 
            echo $this->image_lib->display_errors();
 
        }      
 
    } 

    public function add_new_entry()
  {
    
       $config['upload_path']   =   "assets/uploads/";
 
       $config['allowed_types'] =   "gif|jpg|jpeg|png"; 
 
       $config['max_size']      =   "5000";
 
       $config['max_width']     =   "1907";
 
       $config['max_height']    =   "1280";
 
       $this->load->library('upload',$config);
 
       if(!$this->upload->do_upload())
 
       {
 
           echo $this->upload->display_errors();
 
       }
 
       else
 
       {
 
           $finfo=$this->upload->data();
 
           $this->_createThumbnail($finfo['file_name']);
 
           $data['uploadInfo'] = $finfo;
 
           $data['thumbnail_name'] = $finfo['raw_name']. '_thumb' .$finfo['file_ext']; 
 
           $this->load->view('Main/upload_success',$data);
 
           // You can view content of the $finfo with the code block below
 
           /*echo '<pre>';
 
           print_r($finfo);
 
           echo '</pre>';*/
 
       }

    
    // if( ! $this->ion_auth->logged_in() && ! $this->ion_auth->is_admin() ) // block un-authorized access
    // {
    //   show_404();
    // }
    // else
    // {
      $data['title'] = 'Add new entry - '.$this->config->item('site_title', 'ion_auth');
      $data['categories'] = $this->blog_model->get_categories();
      
      $this->load->helper('form');
      $this->load->library(array('form_validation'));
      
      //set validation rules
      $this->form_validation->set_rules('entry_name', 'Title', 'required|max_length[200]|xss_clean');
      $this->form_validation->set_rules('entry_body', 'Body', 'required|xss_clean');
      $this->form_validation->set_rules('entry_category', 'Category', 'required');
      
      if ($this->form_validation->run() == FALSE)
      {
        //if not valid
        $this->load->view('admin/add_new_entry',$data);
      }
      else
      {
        //if valid
        $user = $this->ion_auth->user()->row();
        $title = $this->input->post('entry_name');
        $body = $this->input->post('entry_body');
        $categories = $this->input->post('entry_category');
        
        //$this->blog_model->add_new_entry($user->id,$title,$body,$categories);
        $this->session->set_flashdata('message', '1 new post added!');
        redirect('add-new-entry');
      }
    // }
  }  
    
}
?>