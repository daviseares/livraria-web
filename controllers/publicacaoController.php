<?php
include_once('../classes/Publicacao.php');
include_once('../modules/publicacao/repositories/PublicacaoRepository.php');
include_once('../modules/publicacao/services/ShowPublicacoesService.php');
// include_once('../modules/publicacao/services/CreatePublicacaoService.php');

// include_once('../modules/publicacao/services/GetPublicacaoService.php');
// include_once('../modules/publicacao/services/DeletePublicacaoService.php');
// include_once('../modules/publicacao/services/UpdatePublicacaoService.php');
include_once('../database/conexao.php');

$con = new Conexao();
$publicacaoRepository = new PublicacaoRepository($con);

$option = $_REQUEST['option'];

switch ($option) {
    case 1:
        // $createLivroService = new CreateLivroService($livroRepository);

        // $isbn = $_REQUEST['fisbn'];
        // $titulo = $_REQUEST['ftitulo'];
        // $edicao_num =  $_REQUEST['fedicao_num'];
        // $ano_publicacao =  $_REQUEST['fano_publicacao'];
        // $descricao = $_REQUEST['fdescricao'];

        // $livro = new Livro(
        //     $isbn,
        //     $titulo,
        //     $edicao_num,
        //     $ano_publicacao,
        //     $descricao
        // );

        // $createdLivro = $createLivroService->execute($livro);

        // if ($createdLivro) {
        //     echo "
        //     <script>
        //     alert('LIVRO cadastrado com sucesso');
        //     window.location='http://localhost:8080/www/livrariaweb/controllers/livroController.php?option=2';
        //     </script>
        //     ";
        // }

        break;

    case 2:
        $showPublicacoes = new ShowPublicacoesService($publicacaoRepository);

        session_start();
        $publicacoes = $showPublicacoes->execute();

        $_SESSION['publicacoes'] =  $publicacoes;

        header('Location: http://localhost:8080/www/livrariaweb/restrito/exibirPublicacoes.php');

        break;

    case 3:

        break;
    case 4:

        break;

    case 5:

        break;
    default:
        break;
}
