<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	function __construct() {
		parent::__construct();
		if (!$this->db->table_exists('users')){
			$this->base_m->create_base();
		}
		$this->load->library('repositories/about_repo');
	}

	public function index() {
		echo loadViewsFront('about', $this->about_repo->loadData());
	}
}