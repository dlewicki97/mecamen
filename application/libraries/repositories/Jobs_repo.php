<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs_repo { 
	protected $CI;

	public function __construct() {
		$this->CI =& get_instance();
		$this->CI->load->helper('default');
	}

	public function loadData() {
		$data = loadDefaultDataFront();
		$data['jobs'] = $this->CI->back_m->get_all('jobs');
		$data['jobs_descriptions'] = $this->CI->back_m->get_one('jobs_descriptions', 1);
		
		return $data;
	}
}