<?php
include_once('../classes/Autor.php');
include_once('../modules/autor/repositories/AutorRepository.php');
include_once('../modules/autor/services/CreateAutorService.php');
include_once('../modules/autor/services/ShowAutoresService.php');
include_once('../modules/autor/services/GetAutorService.php');
include_once('../modules/autor/services/DeleteAutorService.php');
include_once('../modules/autor/services/UpdateAutorService.php');
include_once('../database/conexao.php');

$con = new Conexao();
$autorRepository = new AutorRepository($con);

$option = $_REQUEST['option'];

switch ($option) {
    case 1:
        $createAutorService = new CreateAutorService($autorRepository);

        $nome = $_REQUEST['fnome'];
        $email = $_REQUEST['femail'];
        $data = $_REQUEST['fdata'];

        $autor = new Autor($nome, $email, $data);

        $createdAutor = $createAutorService->execute($autor);

        if ($createdAutor) {
            echo "
            <script>
            alert('Autor cadastrado com sucesso');
            window.location='http://localhost:8080/www/livrariaweb/controllers/autorController.php?option=2';
            </script>
            ";
        }

        break;

    case 2:
        $showAutoresService = new ShowAutoresService($autorRepository);

        session_start();
        $autores = $showAutoresService->execute();

        $_SESSION['autores'] =  $autores;

        header('Location: http://localhost:8080/www/livrariaweb/restrito/exibirAutores.php');

        break;

    case 3:
        $getAutorService = new GetAutorService($autorRepository);

        //recupera id do autor que será atualizado
        $id = $_REQUEST['id'];

        session_start();
        $autor = $getAutorService->execute($id);

        $_SESSION['autor'] =  $autor;

        header('Location: http://localhost:8080/www/livrariaweb/restrito/atualizarAutor.php');
        break;

    case 4:
        $deleteAutorService = new DeleteAutorService($autorRepository);

        //recupera id do autor
        $id = $_REQUEST['id'];

        //chama serviço executa exclusão
        $delete = $deleteAutorService->execute($id);

        var_dump($delete);

        header('Location: http://localhost:8080/www/livrariaweb/controllers/autorController.php?option=2');
        break;

    case 5:
        $updateAutorService = new UpdateAutorService($autorRepository);

        $id = $_REQUEST['id'];
        $nome = $_REQUEST['fnome'];
        $email = $_REQUEST['femail'];
        $data = $_REQUEST['fdata'];

        $autor = new Autor($nome, $email, $data);

        $autor->setAutor_id($id);

        $updateAutorService->execute($autor);

        header('Location: http://localhost:8080/www/livrariaweb/controllers/autorController.php?option=2');
        break;
    default:
        break;
}
