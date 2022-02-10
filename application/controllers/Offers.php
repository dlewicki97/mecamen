<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offers extends CI_Controller {

	function __construct() {
		parent::__construct();
		if (!$this->db->table_exists('users')){
			$this->base_m->create_base();
		}
		$this->load->library('repositories/offers_repo');
	}

	public function index() {
		echo loadViewsFront('offers', $this->offers_repo->loadData());
	}

	public function show($id) {
		echo loadViewsFront('single_offer', $this->offers_repo->loadShowData($id));
	}
}