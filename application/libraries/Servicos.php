<?php

class Servicos extends CI_Object {
    
    public function get(){
        $rs = $this->db->get('servicos');
        return $rs->result_array();
    }

    public function get_by_id($id){
        $cond['id'] = $id;
        $rs = $this->db->get_where('servicos', $cond);
        return $rs->row_array();
    }

    public function set(Array $data){
        $this->db->insert('servicos', $data);
    }

    public function update($data, $id){
        $cond['id'] = $id;
        return $this->db->update('servicos', $data, $cond);
    }

    public function delete($id){
        $cond = array('id' => $id);
        $this->db->delete('servicos', $cond);
    }

}