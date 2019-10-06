<?php 

class Servicos {
    // atributos
    private $titulo;
    private $descricao;
    private $img;

    // construtor
    function __construct(){
        $this->titulo = 
        $this->descricao = 
        $this->img = 
    }

    // métodos acessores
    public function getTitulo(){
        return $this->titulo;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function getImage(){
        return $this->img;
    }

}