<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_repo { 
	protected $CI;

	public function __construct() {
		$this->CI =& get_instance();
		$this->CI->load->helper('default');
	}

	public function loadData() {
		$data = loadDefaultDataFront();
		$data['contact_icons'] = $this->CI->back_m->get_all('contact_icons');
		
		return $data;
	}
}