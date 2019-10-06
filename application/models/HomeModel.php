<?php

class HomeModel extends CI_Model{

    public function __construct(){
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);

    }

    public function get(){
        
        return "teste teste teste";
    }

    public function connection_test(){

    }

    public function get_version(){

        $result_set = $this->db->query('SELECT VERSION()');
        return $result_set;
    }

    public function all(){
        $result_set = $this->db->get('servicos');
        return $result_set->result_array();
    }

    public function deleteModel($id){
        $this->db->delete('servicos', ['id'=> $id]);
        return $this->db->delete('servicos', $id);
        
    }

    public function insertModel($data){
        return $this->db->insert('servicos', $data);
        
    }

    public function editModel($id, $data){
        //$this->db->set('TITULO', $data['TITULO'], FALSE);
        //$this->db->set('RESUMO', $data['RESUMO'], FALSE);
        //$this->db->set('IMAGEM', , FALSE);
        //$this->db->where('ID', $id);
        //var_dump($id);
        //die();
        $this->db->update('servicos', $data, array('ID' => $id));
    }
}