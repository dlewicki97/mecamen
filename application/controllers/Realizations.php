<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Realizations extends CI_Controller {

	function __construct() {
		parent::__construct();
		if (!$this->db->table_exists('users')){
			$this->base_m->create_base();
		}
		$this->load->library('repositories/realizations_repo');
	}

	public function index() {
		echo loadViewsFront('realizations', $this->realizations_repo->loadData());
	}
}