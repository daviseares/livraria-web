<?php
include_once('../classes/Autor.php');

include_once('IAutorRepository.php');

class AutorRepository implements IAutorRepository
{
    private $con;

    /**
     * Class constructor.
     */
    public function __construct(Conexao $con)
    {
        $this->con = $con->getConexao();
    }

    public function create(Autor $autor): void
    {
        $sql = $this->con->prepare("INSERT INTO autores (nome, email, dt_nasc) values (:nom, :em, :dat)");

        $sql->bindValue(':nom', $autor->getNome());
        $sql->bindValue(':em', $autor->getEmail());
        $sql->bindValue(':dat', $this->converteDataMysql($autor->getDataNascimento()));
        $sql->execute();
    }

    public function update(Autor $autor): void
    {
        $sql = $this->con->prepare("UPDATE autores SET nome=:nom, email=:em, dt_nasc=:dat  WHERE autor_id = :id");
        $sql->bindValue(':id', $autor->getAutor_id());
        $sql->bindValue(':nom', $autor->getNome());
        $sql->bindValue(':em', $autor->getEmail());
        $sql->bindValue(':dat', $this->converteDataMysql($autor->getDataNascimento()));

        $sql->execute();
    }

    public function delete(string $id): void
    {
        $sql = $this->con->prepare("DELETE FROM autores WHERE autor_id=:id");

        $sql->bindValue(':id', $id);

        $sql->execute();
    }

    public function all()
    {
        $sql = $this->con->prepare("SELECT * FROM autores");
        $sql->execute();

        while ($r = $sql->fetch(PDO::FETCH_OBJ)) {
            $arrayAutores[] = $r;
        }

        return $arrayAutores;
    }

    public function findById(string $id): ?stdClass
    {
        $sql = $this->con->prepare("SELECT * FROM autores WHERE autor_id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        $foundAutor = $sql->fetch(PDO::FETCH_OBJ);

        if ($foundAutor) {
            return  $foundAutor;
        }

        return null;
    }

    public function findByEmail(string $email): ?stdClass
    {
        $sql = $this->con->prepare("SELECT * FROM autores WHERE email = :email");
        $sql->bindValue(':email', $email);
        $sql->execute();

        $foundAutor = $sql->fetch(PDO::FETCH_OBJ);

        if ($foundAutor) {
            return $foundAutor;
        }

        return null;
    }

    function converteDataMysql($data)
    {
        return date('Y-m-d', $data);
    }
}
