<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accounts extends CI_Controller {

	public function index()
	{
		$this->load->view('dashboard/login');
	}

	public function register()
	{
		$this->load->view('dashboard/register');
	}

}