<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{	
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('intro');
		$this->load->view('content');
		$this->load->view('footer');
	}
}
