<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
		parent::__construct();
		if (!$this->db->table_exists('users')){
			$this->base_m->create_base();
		}
		$this->load->library('repositories/home_repo');
	}

	public function index() {
		echo loadViewsFront('index', $this->home_repo->loadData());
	}

	public function hash() {
		echo hashPassword('123wispo123');
	}
}