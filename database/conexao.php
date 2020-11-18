<?php

class Conexao
{
      private $servidor_mysql = 'localhost';
      private $nome_banco = 'livraria';
      private $usuario = 'davi';
      private $senha = 'admin'; //se vc tem senha para o usuário root, coloque aqui!
      private $con;

      public function getConexao()
      {
            $this->con = new PDO("mysql:host=$this->servidor_mysql;dbname=$this->nome_banco","$this->usuario","$this->senha");
            return $this->con;
      }
}

?>

