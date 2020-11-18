<?php

class Cliente
{
    private $cpf;
    private $nome;
    private $logradouro;
    private $cidade;
    private $estado;
    private $cep;
    private $data_nascimento;
    private $email;
    private $senha;
    private $rg;
    private $tipo;

    /**
     * Class constructor.
     */
    public function __construct(
        $cpf,
        $nome,
        $logradouro,
        $cidade,
        $estado,
        $cep,
        $data_nascimento,
        $email,
        $senha,
        $rg,
        $tipo
    ) {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->logradouro = $logradouro;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->cep = $cep;
        $this->data_nascimento = strtotime(str_replace('/', '-', $data_nascimento));
        $this->email = $email;
        $this->senha = $senha;
        $this->rg = $rg;
        $this->tipo = $tipo;
    }


    /**
     * Get the value of cpf
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Get the value of logradouro
     */
    public function getLogradouro()
    {
        return $this->logradouro;
    }

    /**
     * Get the value of cidade
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Get the value of cep
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * Get the value of data_nascimento
     */
    public function getData_nascimento()
    {
        return $this->data_nascimento;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get the value of senha
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Get the value of rg
     */
    public function getRg()
    {
        return $this->rg;
    }

    /**
     * Get the value of tipo
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Get the value of estado
     */
    public function getEstado()
    {
        return $this->estado;
    }
}
