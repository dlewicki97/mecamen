<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Downloads_repo { 
	protected $CI;

	public function __construct() {
		$this->CI =& get_instance();
		$this->CI->load->helper('default');
	}

	public function loadData() {
		$data = loadDefaultDataFront();
		$data['downloads'] = $this->CI->back_m->get_all('downloads');
		
		return $data;
	}
}