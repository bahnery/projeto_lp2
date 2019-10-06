<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class MY_Controller extends CI_Controller{

    public function show($conteudo){
        // incluir o cabeçalho
        $html = $this->load->view('layouts/header', null, true);
        $html .= $this->load->view('layouts/navbar', null, true);

        // incluir o conteúdo
        $html .= $conteudo;

        // incluir o rodapé
        //$html .= $this->load->view('componente/rodape', null, true);
        $html .= $this->load->view('layouts/footer', null, true);
        //echo $html;
    }

}