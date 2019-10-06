<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{	
		$this->load->view('common/header');
		$this->load->view('common/navbar_home');
		$this->load->view('home/intro');
	}

	public function servicos()
	{	
		$this->load->view('common/header');
		$this->load->view('common/navbar');
		$this->load->view('servicos/procs');
		$this->load->view('common/footer');
	}

	public function contato()
	{	
		$this->load->view('common/header');
		$this->load->view('common/navbar');
		$this->load->view('contato/info');
		$this->load->view('common/footer');
	}
}
