<?php

class Endereco {

    private $cep;
    private $estado;
    private $cidade;
    private $logradouro;
    private $numero;
    private $complemento;

    function __construct($cep, $estado, $cidade, $logradouro, $numero, $complemento) {
        $this->cep = $cep;
        $this->estado = $estado;
        $this->cidade = $cidade;
        $this->logradouro = $logradouro;
        $this->numero = $numero;
        $this->complemento = $complemento;
    }

    // Apresentar endereço completo
    function enderecoCompleto() {
        print(" ===== ENDERECO ===== <br>");
        print("CEP: $this->cep<br>");
        print("Estado: $this->estado<br>");
        print("Cidade: $this->cidade<br>");
        print("Logradouro: $this->logradouro<br>");
        print("Número: $this->numero<br>");
        print("Complemento: $this->complemento<br>");
        print(" =============== <br>");
    }

    // Getters e Setters
    public function getCep() {
        return $this->cep;
    }
    public function setCpf($cep) {
        $this->cep = $cep;
    }

    public function getEstado() {
        return $this->estado;
    }
    public function setEstado($estado) {
        $this->estado = $estado;
    }

    public function getCidade() {
        return $this->cidade;
    }
    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    public function getLogradouro() {
        return $this->logradouro;
    }
    public function setLogradouro($logradouro) {
        $this->logradouro = $logradouro;
    }

    public function getNumero() {
        return $this->numero;
    }
    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function getComplemento() {
        return $this->complemento;
    }
    public function setComplemento($complemento) {
        $this->complemento = $complemento;
    }
}