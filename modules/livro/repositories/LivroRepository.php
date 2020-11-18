<?php

include_once('../classes/Cliente.php');

include_once('ILivroRepository.php');

class LivroRepository implements ILivroRepository
{
    private $con;
    /**
     * Class constructor.
     */
    function __construct(Conexao $con)
    {
        $this->con = $con->getConexao();
    }

    public function create(Livro $livro): void
    {
        $b = $livro->getBook();
        list(
            $isbn,
            $titulo,
            $edicao_num,
            $ano_publicacao,
            $descricao,
        ) = $b;

        $sql =  $this->con->prepare("INSERT INTO livros (isbn, titulo, edicao_num, ano_publicacao, descricao)
        values (:isbn, :titulo, :edicao_num, :ano_publicacao, :descricao)");

        $sql->bindValue(":isbn", $isbn);
        $sql->bindValue(":titulo", $titulo);
        $sql->bindValue(":edicao_num", $edicao_num);
        $sql->bindValue(":ano_publicacao", $ano_publicacao);
        $sql->bindValue(":descricao", $descricao);

        $sql->execute();
    }

    public function update(Livro $livro): void
    {
        $b = $livro->getBook();
        list(
            $isbn,
            $titulo,
            $edicao_num,
            $ano_publicacao,
            $descricao,
        ) = $b;

        $sql =  $this->con->prepare("UPDATE livros SET titulo=:titulo, edicao_num=:edicao_num, ano_publicacao=:ano_publicacao, descricao = :descricao  WHERE isbn= :isbn");

        $sql->bindValue(":isbn", $isbn);
        $sql->bindValue(":titulo", $titulo);
        $sql->bindValue(":edicao_num", $edicao_num);
        $sql->bindValue(":ano_publicacao", $ano_publicacao);
        $sql->bindValue(":descricao", $descricao);

        $sql->execute();
    }

    public function delete(string $isbn): void
    {
        $sql =  $this->con->prepare("DELETE FROM livros WHERE isbn= :isbn");

        $sql->bindValue(":isbn", $isbn);

        $sql->execute();
    }

    public function all()
    {
        $sql =  $this->con->prepare("SELECT * FROM livros");
        $sql->execute();

        while ($l = $sql->fetch(PDO::FETCH_OBJ)) {
            $arrayLivro[] = $l;
        }

        return  $arrayLivro;
    }

    public function findByIsbn(string $isbn): ?stdClass
    {

        $sql =  $this->con->prepare("SELECT * FROM livros WHERE isbn= :isbn");

        $sql->bindValue(":isbn", $isbn);

        $sql->execute();

        $livro = $sql->fetch(PDO::FETCH_OBJ);

        if ($livro) {
            return $livro;
        }

        return null;
    }
}
