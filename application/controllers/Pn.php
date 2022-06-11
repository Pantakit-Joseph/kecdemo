<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pn extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->library('sawasdee');
	}
	public function Request_internship() {
		$this->load->view('pn/request_internship', ['in' => $this->input->post()]);
	}
}
