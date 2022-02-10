<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Realizations_repo { 
	protected $CI;

	public function __construct() {
		$this->CI =& get_instance();
		$this->CI->load->helper('default');
	}

	public function loadData() {
		$data = loadDefaultDataFront();
		$data['realizations'] = $this->CI->back_m->get_one('realizations', 1);
		$data['gallery'] = $this->CI->back_m->get_images('gallery', 'realizations', 1, 'menu_order');
		
		return $data;
	}
}