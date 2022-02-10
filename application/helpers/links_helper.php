<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function base() {
	return base_url();
}

function assets() {
	return base(). 'assets/front/';
}

function file_url() {
	return base(). 'uploads/';
}