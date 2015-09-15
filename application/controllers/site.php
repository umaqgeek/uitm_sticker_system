<?php

/*class Site extends CI_Controller{

	function index(){
		$data['myValue'] = "Some string";
		$data['anotherValue'] = "another string";

		$this->load->view('home', $data);
	}

	function about(){
		$this->load->view('about');
	}
} */

class Site extends CI_Controller {

function members_area()
{
	$this->load->view('members_area');
}

}