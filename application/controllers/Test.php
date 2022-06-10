<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function Request_internship() {
		$this->load->view('pn/request_internship_t');
	}
}
