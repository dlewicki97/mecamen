<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_repo { 
	protected $CI;

	public function __construct() {
		$this->CI =& get_instance();
		$this->CI->load->helper('default');
	}

	public function loadData() {
		$data = loadDefaultDataFront();
		$data['main_about'] = $this->CI->back_m->get_where('about', 'main', 1);
		$data['about'] = $this->CI->back_m->get_all_where('about', 'main', 0);
		$data['history'] = $this->CI->back_m->get_all('history');
		$data['history_descriptions'] = $this->CI->back_m->get_one('history_descriptions', 1);
		$data['partners'] = $this->CI->back_m->get_all('partners');
		$data['partners_descriptions'] = $this->CI->back_m->get_one('partners_descriptions', 1);
		$data['about_references'] = $this->CI->back_m->get_one('about_references', 1);
		$data['references'] = $this->CI->back_m->get_images('gallery', 'about_references', 1);
		$data['history_map'] = $this->CI->back_m->get_one('history_map', 1);
		$data['history_group'] = $this->CI->back_m->get_all('history_group');
		
		return $data;
	}
}