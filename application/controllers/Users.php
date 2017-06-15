<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

public function index() {
	$this->my_template->loadAdmin('login','');
}

public function setlogin() {
	$newdata = array(
			'username'  => 'rizqi',
			'email'     => 'rizqiulhusna@gmail.com',
			'logged_in' => TRUE
		);
	$this->session->set_userdata($newdata);
}

public function setlogout() {
	$newdata = array(
			'username'  => '',
			'email'     => '',
			'logged_in' => FALSE
		);
	$this->session->unset_userdata($newdata);
}
}