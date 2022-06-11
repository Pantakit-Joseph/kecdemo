<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request_internship extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('sawasdee');
		$this->load->model('request_internship_model', 're_internship');
	}

	public function index() {
		$data = [
			'index' => $this->re_internship->index()
		];
		$this->load->view('form/request_internship', $data);
	}

	public function submit() {
		$this->re_internship->submit();
		$this->load->view('pn/request_internship', ['in' => $this->input->post()]);
	}
}
