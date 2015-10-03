<?php
class Admin extends CI_Controller
{
	function display()
	{
		$this->load->model('admin_model');

		$results->this->admin_model->search();

		$data['admin'] = $results['rows'];
		$data['num_results'] = $results['num_rows'];

		$this->load->view('admin', $data);
	}
}