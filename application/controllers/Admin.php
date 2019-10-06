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

	public function editar($id=0){
		//var_dump($id);
		//die();
		$data['id']= $id;
		$this->load->view('admin/header');
		$this->load->view('admin/navbar');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/editar', $data);
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

	public function editCCard(){
		$id = $this->input->post('ID');
		$data = [];
		$data ['TITULO'] = $this->input->post('TITULO');
		$data ['RESUMO'] = $this->input->post('RESUMO');
		$data ['IMAGEM'] = $this->input->post('IMAGEM');
		//var_dump($id);
		//die();		
		$this->HomeModel->editModel($id, $data);
		//var_dump($data);

		return redirect('admin');
	}

	

}