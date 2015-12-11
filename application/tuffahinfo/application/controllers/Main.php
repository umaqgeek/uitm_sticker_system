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

    public function services()
    {
        $this->load->view('Main/services');
    }

    public function product()
    {
        $this->viewpage1('product');
    }

     function logout()
        {
            $this->simpleloginsecure->logout();
            redirect(site_url('Main'));
        }  
 
    
    //Upload Image function
 
    function uploadImage()
 
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
    
}
?>