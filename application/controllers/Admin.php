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
		
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'jpg';
		$config['file_name']			= $data['IMAGEM'] = $this->input->post('IMAGEM');
		$config['max_size']             = 5000;
		$config['max_width']            = 5000;
		$config['max_height']           = 5000;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('userfile')){				
				$data['TITULO'] = $this->input->post('TITULO');
				$data['IMAGEM'] = $this->input->post('IMAGEM');				
				$data['RESUMO'] = $this->input->post('RESUMO');
				
				$this->HomeModel->insertModel($data);
				return redirect('admin');
		}

		$error = array('error' => $this->upload->display_errors());
		echo($error['error']);	
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