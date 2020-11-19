<?php

include_once('../classes/Publicacao.php');

include_once('IPublicacaoRepository.php');

class PublicacaoRepository implements IPublicacaoRepository
{
    private $con;
    /**
     * Class constructor.
     */
    function __construct(Conexao $con)
    {
        $this->con = $con->getConexao();
    }


    public function all()
    {
        $sql = $this->con->query("SELECT * FROM publicacao");

        $publicacoes = array();
        while ($pub = $sql->fetch(PDO::FETCH_OBJ)) {

            $publicacoes[] = $pub;
        }

        var_dump($publicacoes);
        return $publicacoes;
    }

    public function findById(string $publicacao_id): ?stdClass
    {
        $sql = $this->con->prepare("SELECT * FROM publicacao where publicacao_id = :id");

        $sql->bindValue(':id', $publicacao_id);
        $sql->execute();

        $publicacao = $sql->fetch(PDO::FETCH_OBJ);

        return $publicacao;
    }

    public function findEditora(string $id): ?stdClass
    {
        $sql = $this->con->prepare("SELECT editora_nome FROM editora where editora_id = :id");

        $sql->bindValue(':id', $id);
        $sql->execute();

        $editora = $sql->fetch(PDO::FETCH_OBJ);

        return $editora;
    }

    public function findLivro(string $isbn): ?stdClass
    {

        $sql =  $this->con->prepare("SELECT * FROM livros WHERE isbn= :isbn");

        $sql->bindValue(":isbn", $isbn);

        $sql->execute();

        $livro = $sql->fetch(PDO::FETCH_OBJ);


        return $livro;
    }

    public function findAutor(string $autor_id): ?stdClass
    {
        $sql =  $this->con->prepare("SELECT * FROM autores WHERE autor_id= :autor_id");

        $sql->bindValue(":autor_id", $autor_id);

        $sql->execute();

        $autor = $sql->fetch(PDO::FETCH_OBJ);

        return $autor;
    }
}
