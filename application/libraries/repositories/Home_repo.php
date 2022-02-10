<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_repo { 
	protected $CI;

	public function __construct() {
		$this->CI =& get_instance();
		$this->CI->load->helper('default');
	}

	public function loadData() {
		$data = loadDefaultDataFront();
		$data['slider'] = $this->CI->back_m->get_all('slider');
		$data['services'] = $this->CI->back_m->get_all('services');
		$data['services_descriptions'] = $this->CI->back_m->get_one('services_descriptions', 1);
		$data['why_us'] = $this->CI->back_m->get_all('why_us');
		$data['why_us_descriptions'] = $this->CI->back_m->get_one('why_us_descriptions', 1);
		$data['steps'] = $this->CI->back_m->get_all('steps');
		$data['steps_descriptions'] = $this->CI->back_m->get_one('steps_descriptions', 1);
		$data['touch'] = $this->CI->back_m->get_one('touch', 1);
		$data['touch_icons'] = $this->CI->back_m->get_all('touch_icons');
		$data['map_descriptions'] = $this->CI->back_m->get_one('map_descriptions', 1);

		
		return $data;
	}
}