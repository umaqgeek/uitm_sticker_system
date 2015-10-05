<?php
class Admin extends CI_Controller
{
	function display($offset = 0)
	{
		$limit = 20;

		$this->load->model('admin_model');

		$results = $this->admin_model->search($limit, $offset);

		$data['admin'] = $results['rows'];
		$data['num_results'] = $results['num_rows'];

		$this->load->view('admin', $data);
	}
}