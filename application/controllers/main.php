<?php  
 
class Main extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();
 
        /* Standard Libraries of codeigniter are required */
        $this->load->database();
        $this->load->helper('url');
        /* ------------------ */ 
 
        $this->load->library('Grocery_CRUD');
 
    }
 
    public function index()
    {
        echo "<h1>Welcome to the world of Codeigniter</h1>";//Just an example to ensure that we get into the function
        die();
    }
 
    // public function employees()
    // {
    //     $this->grocery_crud->set_table('employees');
    //     $output = $this->grocery_crud->render();


    //     $this->_example_output($output);
 
        //echo "<pre>";
        //print_r($output);
        //echo "</pre>";
        //die();
    // }

    // function _example_output($output = null)
 
    // {
    //     $this->load->view('sticker_templates.php',$output);    
    // }
 }
/* End of file main.php */
/* Location: ./application/controllers/main.php */
 