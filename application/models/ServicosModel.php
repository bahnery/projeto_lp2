<?php 
include_once APPPATH.'libraries/Card.php';
    
class ServicosModel {


    public function getCards(){
        $this->load->library('Card');
       
        $html = '';

        foreach ($this->matriz as $row) {
            $card = new Card($row);
            $html .= $card->getHTML();
        }
        return $html;
    }
}