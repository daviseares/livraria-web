<?php
include_once('../classes/Cliente.php');

include_once('IClienteRepository.php');

class ClienteRepository implements IClienteRepository
{
    private $con;

    /**
     * Class constructor.
     */
    public function __construct(Conexao $con)
    {
        $this->con = $con->getConexao();
    }

    public function create(Cliente $cliente): void
    {
        $sql = $this->con->prepare("INSERT INTO clientes (cpf,nome,logradouro,cidade,estado,cep,data_nascimento,email,senha,rg,tipo) VALUES (:bindcpf,:bindnome,:bindlogradouro,:bindcidade,:bindestado,:bindcep,:binddata_nascimento,:bindemail,:bindsenha,:bindrg,:bindtipo)");

        $sql->bindValue(':bindcpf', $cliente->getCpf());
        $sql->bindValue(':bindnome', $cliente->getNome());
        $sql->bindValue(':bindlogradouro', $cliente->getLogradouro());
        $sql->bindValue(':bindcidade', $cliente->getCidade());
        $sql->bindValue(':bindestado', $cliente->getEstado());
        $sql->bindValue(':bindcep', $cliente->getCep());
        $sql->bindValue(':binddata_nascimento', $this->converteDataMysql($cliente->getData_nascimento()));
        $sql->bindValue(':bindemail', $cliente->getEmail());
        $sql->bindValue(':bindsenha', $cliente->getSenha());
        $sql->bindValue(':bindrg', $cliente->getRg());
        $sql->bindValue(':bindtipo', $cliente->getTipo());

        $sql->execute();
    }

    public function update(Cliente $cliente): void
    {

        $sql = $this->con->prepare("UPDATE clientes SET cpf=:bindcpf, nome=:bindnome, logradouro=:bindlogradouro, cidade=:bindcidade, estado=:bindestado, cep=:bindcep, data_nascimento=:binddata_nascimento, email=:bindemail, senha=:bindsenha, rg=:bindrg, tipo=:bindtipo  WHERE cpf = :bindcpf");

        $sql->bindValue(':bindcpf', $cliente->getCpf());
        $sql->bindValue(':bindnome', $cliente->getNome());
        $sql->bindValue(':bindlogradouro', $cliente->getLogradouro());
        $sql->bindValue(':bindcidade', $cliente->getCidade());
        $sql->bindValue(':bindestado', $cliente->getEstado());
        $sql->bindValue(':bindcep', $cliente->getCep());
        $sql->bindValue(':binddata_nascimento', $this->converteDataMysql($cliente->getData_nascimento()));
        $sql->bindValue(':bindemail', $cliente->getEmail());
        $sql->bindValue(':bindsenha', $cliente->getSenha());
        $sql->bindValue(':bindrg', $cliente->getRg());
        $sql->bindValue(':bindtipo', $cliente->getTipo());

        $sql->execute();
    }

    public function delete(string $cpf): void
    {
        $sql = $this->con->prepare("DELETE FROM clientes WHERE cpf=:cpf");

        $sql->bindValue(':cpf', $cpf);

        $sql->execute();
    }

    public function all()
    {
        $sql = $this->con->prepare("SELECT * FROM clientes");
        $sql->execute();

        while ($c = $sql->fetch(PDO::FETCH_OBJ)) {
            $arrayClientes[] = $c;
        }

        return  $arrayClientes;
    }

    public function findByCpf(string $cpf): ?stdClass
    {
        $sql = $this->con->prepare("SELECT * FROM clientes WHERE cpf = :cpf");
        $sql->bindValue(':cpf', $cpf);
        $sql->execute();

        $foundCliente = $sql->fetch(PDO::FETCH_OBJ);

        if ($foundCliente) {
            return  $foundCliente;
        }

        return null;
    }

    function converteDataMysql($data)
    {
        return date('Y-m-d', $data);
    }
}
