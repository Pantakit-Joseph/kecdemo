<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->csrf = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		);
	}
	public function Request_internship() {
		$this->load->view('form/request_internship',['csrf' => $this->csrf]);
	}
}
