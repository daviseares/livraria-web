<?php
include_once('../classes/Livro.php');
include_once('../modules/livro/repositories/LivroRepository.php');
include_once('../modules/livro/services/CreateLivroService.php');
include_once('../modules/livro/services/ShowLivrosService.php');
include_once('../modules/livro/services/GetLivroService.php');
include_once('../modules/livro/services/DeleteLivroService.php');
include_once('../modules/livro/services/UpdateLivroService.php');
include_once('../database/conexao.php');

$con = new Conexao();
$livroRepository = new LivroRepository($con);

$option = $_REQUEST['option'];

switch ($option) {
    case 1:
        $createLivroService = new CreateLivroService($livroRepository);

        $isbn = $_REQUEST['fisbn'];
        $titulo = $_REQUEST['ftitulo'];
        $edicao_num =  $_REQUEST['fedicao_num'];
        $ano_publicacao =  $_REQUEST['fano_publicacao'];
        $descricao = $_REQUEST['fdescricao'];

        $livro = new Livro(
            $isbn,
            $titulo,
            $edicao_num,
            $ano_publicacao,
            $descricao
        );

        $createdLivro = $createLivroService->execute($livro);

        if ($createdLivro) {
            echo "
            <script>
            alert('LIVRO cadastrado com sucesso');
            window.location='http://localhost:8080/www/livrariaweb/controllers/livroController.php?option=2';
            </script>
            ";
        }

        break;

    case 2:
        $showLivrosService = new ShowLivrosService($livroRepository);

        session_start();
        $livros = $showLivrosService->execute();

        $_SESSION['clientes'] =  $livros;

        header('Location: http://localhost:8080/www/livrariaweb/restrito/exibirLivros.php');

        break;

    case 3:
        $getLivroService = new GetLivroService($livroRepository);

        $isbn = $_REQUEST['isbn'];
        session_start();

        $livro = $getLivroService->execute($isbn);

        var_dump($livro);

        $_SESSION['livro'] =  $livro;

        header('Location: http://localhost:8080/www/livrariaweb/restrito/atualizarLivro.php');
        break;

    case 4:
        $deleteLivroService = new DeleteLivroService($livroRepository);

        $isbn = $_REQUEST['isbn'];
        $deleteLivroService->execute($isbn);

        header('Location: http://localhost:8080/www/livrariaweb/controllers/livroController.php?option=2');

        break;

    case 5:
        $updateLivroService = new UpdateLivroService($livroRepository);

        $isbn = $_REQUEST['fisbn'];
        $titulo = $_REQUEST['ftitulo'];
        $edicao_num =  $_REQUEST['fedicao_num'];
        $ano_publicacao =  $_REQUEST['fano_publicacao'];
        $descricao = $_REQUEST['fdescricao'];

        $livro = new Livro(
            $isbn,
            $titulo,
            $edicao_num,
            $ano_publicacao,
            $descricao
        );

        $updateLivroService->execute($livro);

        header('Location: http://localhost:8080/www/livrariaweb/controllers/livroController.php?option=2');
        break;
    default:
        break;
}
