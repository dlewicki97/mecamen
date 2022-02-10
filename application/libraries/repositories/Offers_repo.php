<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offers_repo { 
	protected $CI;

	public function __construct() {
		$this->CI =& get_instance();
		$this->CI->load->helper('default');
	}

	public function loadData() {
		$data = loadDefaultDataFront();
		$data['offers_categories'] = $this->CI->back_m->get_all('offers_categories');
		$data['offers_descriptions'] = $this->CI->back_m->get_one('offers_descriptions', 1);
		
		return $data;
	}

	public function loadShowData($id) {
		$data = loadDefaultDataFront();
		$data['offers_category'] = $this->CI->back_m->get_one('offers_categories', $id);
		$data['offers'] = $this->CI->back_m->get_all_where('offers', 'offers_category_id', $id);
		
		return $data;
	}
}