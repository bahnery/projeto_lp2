<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$data['servicos'] = $this->HomeModel->all();	
		$this->load->view('admin/header');
		$this->load->view('admin/navbar');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/listar', $data);
		$this->load->view('admin/footer');
	}

	public function adicionar(){
		$this->load->view('admin/header');
		$this->load->view('admin/navbar');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/adicionar');
		$this->load->view('admin/footer');
	}

	public function deleteCCard($id=0){
		$this->HomeModel->deleteModel($id);
		return redirect('admin');
	}

	public function insertCCard(){
		//var_dump($this->input->post());
		//die();
		$insert = $this->input->post();
		$this->HomeModel->insertModel($insert);
		return redirect('admin');
	}

}