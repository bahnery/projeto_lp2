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

		$data['servicos'] = $this->HomeModel->all();
		//var_dump($data);
		//die();
		$this->load->view('common/header');
		$this->load->view('common/navbar');
		$this->load->view('servicos/procs', $data);
		$this->load->view('common/footer');
	}

	public function contato()
	{	
		$this->load->view('common/header');
		$this->load->view('common/navbar');
		$this->load->view('contato/info');
		$this->load->view('common/footer');
	}

	public function show(){


		$data['name'] = $this->HomeModel->get();
		$version = $this->HomeModel->get_version();
		$data['version'] = $version->conn_id->server_info;
		$this->load->view('home/show', $data);
	}

	public function db_test(){
		$this->load->model('HomeModel');
		$this->HomeModel->connection_test();
	}
}
