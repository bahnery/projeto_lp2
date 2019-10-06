<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{	
		$this->load->view('common/header');
		$this->load->view('common/navbar_home');
		$this->load->view('home/intro');
		$this->load->view('common/footer');
	}

	public function servicos()
	{	
		$this->load->view('common/header');
		$this->load->view('common/navbar');
		$this->load->view('content');
		$this->load->view('common/footer');
	}
}
