<?php


class Login extends CI_Controller

{
	function index()
	{
		$data['main_content'] = 'login_form';
		$this->load->view('includes/template', $data);
	}

	function validate_credentials()
	{
		$this->load->model('membership_model');
		$query = $this->membership_model->validate();

		if($query) // if the user's credentials validate...
		{
			$data = array(
				'u_username' => $this->input->post('u_username'),
				'is_logged_in' => true
				);

			$this->session->set_userdata($data);
			redirect('site/members_area');
		}		

		else
		{
			$this->index();
		}
	}

	function sign_up()
	{
		$data['main_content'] = 'signup_form';
		$this->load->view('includes/template', $data);
	}

	function create_member()
	{
		$this->load->library('form_validation');
		//field name, error message, validation rules

		$this->form_validation->set_rules('u_fullname', 'Fullname', 'trim|required');	
		$this->form_validation->set_rules('u_email', 'Email Address', 'trim|required|valid_email');	
		
		$this->form_validation->set_rules('u_username', 'Username', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('u_password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('u_password2', 'Password Confirmation', 'trim|required|matches[u_password]');

		if($this->form_validation->run() == FALSE)
		{
			$this->signup();
		}
		else
		{
			$this->load->model('membership_model');
			if($query = $this->membership_model->create_member())
			{
				$data['main_content'] = 'signup_successful';
				$this->load->view('includes/template', $data);
			}

			else
			{
				$this->load->view('signup_form');
			}

		}
	}
}
*/

class Login extends CI_Controller{

    function index()
    {
        $data['main_content'] = 'login_form';
        $this->load->view('includes/template', $data);
    }

    function validate_credentials()
    {
        $this->load->model('membership_model');
        $query = $this->membership_model->validate();

        if($query) //if the user's credentials validated...
        {
            $data = array(
                'u_username' => $this->input->post('u_username'),
                'is_logged_in' => true
            );

            $this->session->set_userdata($data);
            redirect('site/members_area');
        }

        else
        {
            $this->index();
        }
    }

    function signup()
    {
        $data['main_content'] = 'signup_form';
        $this->load->view('includes/template', $data);
    }

    function create_member()
    {
        $this->load->library('form_validation');
        //field name, error message, validation rules

        $this->form_validation->set_rules('u_fullname', 'Fullname', 'trim|required');
        $this->form_validation->set_rules('u_email', 'Email Address', 'trim|required|valid_email');

        $this->form_validation->set_rules('u_username', 'Username', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('u_password', 'Password', 'trim|required|min_length[4]|max_length[32]');
        $this->form_validation->set_rules('u_password2', 'Password Confirmation', 'trim|required|matches[u_password]');
        
        if($this->form_validation->run() == FALSE)
        {
            $this->signup();
        }
        else
        {
            $this->load->model('membership_model');
            if($query = $this->membership_model->create_member())
            {
                $data['main_content'] = 'signup_successful';
                $this->load->view('includes/template', $data);
            }
            else
            {
                $this->load->view('signup_form');
            }
        }
    }
}
