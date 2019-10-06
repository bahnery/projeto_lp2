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
}