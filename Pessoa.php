<?php

require_once('Endereco.php');

class Pessoa {

    private $nome;
    private $cpf;
    private $dataNasc;
    private $endereco;

    // Construtor
    function __construct($nome, $cpf, $dataNasc) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->dataNasc = $dataNasc;
    }

    // Métodos Especiais
    public function apresentarDados() {
        print(" ===== FICHA ===== <br>");
        print("Nome: $this->nome<br>");
        print("CPF: $this->cpf<br>");
        print("Data de Nascimento: $this->dataNasc<br>");
        print(" =============== <br>");
    }

    // Getters e Setters
    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    
    public function getCpf() {
        return $this->cpf;
    }
    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }
    
    public function getDataNasc() {
        return $this->dataNasc;
    }
    public function setDataNasc($dataNasc) {
        $this->dataNasc = $dataNasc;
    }

    public function getEndereco() {
        return $this->endereco;
    }
    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

}