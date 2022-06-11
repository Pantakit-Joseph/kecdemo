<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_grade extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('sawasdee');
		$this->load->model('edit0_model', 'edit0');
	}

	public function index() {
		$data = [
			'index' => $this->edit0->index()
		];
		$this->load->view('form/edit0', $data);
	}

	public function submit() {
		$this->edit0->submit();
		$this->load->view('pn/edit0', ['in' => $this->input->post()]);
	}
}
