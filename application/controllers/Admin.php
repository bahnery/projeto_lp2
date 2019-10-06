<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$data['servicos'] = $this->HomeModel->all();	
		$this->load->view('admin/header');
		$this->load->view('admin/navbar');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/content', $data);
		$this->load->view('admin/footer');
	}

	public function deleteCCard($id=0){
		$this->HomeModel->deleteModel($id);
		return redirect('admin');
	}
}