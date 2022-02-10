<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Downloads extends CI_Controller {

	function __construct() {
		parent::__construct();
		if (!$this->db->table_exists('users')){
			$this->base_m->create_base();
		}
		$this->load->library('repositories/downloads_repo');
	}

	public function index() {
		echo loadViewsFront('downloads', $this->downloads_repo->loadData());
	}
}