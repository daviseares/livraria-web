<?php

class Autor
{
    public $autor_id;
    public $nome;
    public $email;
    public $dt_nasc;

    /**
     * Class constructor.
     */
    public function __construct($nome, $email, $data)
    {

        $this->nome = $nome;
        $this->email = $email;
        $this->dt_nasc = strtotime(str_replace('/', '-', $data));
    }

    public function setAutor($nome, $email, $data)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->dt_nasc = strtotime(str_replace('/', '-', $data));
    }



    public function getAutor_id()
    {
        return $this->autor_id;
    }

    public function setAutor_id($pId)
    {
        return $this->autor_id = $pId;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($pNome)
    {
        return $this->nome = $pNome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($pEmail)
    {
        return $this->email = $pEmail;
    }

    public function getDataNascimento()
    {
        return $this->dt_nasc;
    }

    public function setDataNascimento($pData)
    {
        return $this->dt_nasc = strtotime($pData);
    }
}
