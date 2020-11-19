<?php
include_once('../classes/Publicacao.php');


session_start();


$publicacoes = $_SESSION['publicacoes'];


?>
<html>

<head>
    <title>Publicações do acervo</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>

<body>

    <div class="container">
        <div class="topo">

        </div>

        <div class="barra">
            <nav>
                <ul class="menu">
                    <li><a href="../">Home</a></li>
                    <li><a href="#">Quem somos?</a></li>
                    <li><a href="#">Clientes</a>
                        <ul>
                            <li><a href="formCliente.php">Cadastrar</a></li>
                            <li><a href="../controllers/clienteController.php?option=2">Consultar Todos</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Autores</a>
                        <ul>
                            <li><a href="formAutor.php">Cadastrar</a></li>
                            <li><a href="../controllers/autorController.php?option=2">Consultar Todos</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Livros</a>
                        <ul>
                            <li><a href="formLivro.php">Cadastrar</a></li>
                            <li><a href="../controllers/livroController.php?option=2">Consultar Todos</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Publicações</a>
                        <ul>
                            <li><a href="#">Relação de publicações</a></li>
                            <li><a href="#">Cadastrar</a></li>
                            <li><a href="#">Controlar Estoque</a></li>
                        </ul>
                    </li>
                    <li><a href="contato.php">Contato</a></li>
                    <li><a href="formLogin.php">Login</a></li>
                </ul>
            </nav>
        </div>

        <div class="breadcrumb">
            <ul>
                <li><a href="../index.html">Página Inicial</a></li>
                <li>Publicações do acervo</li>
            </ul>
        </div>
        <div class="divider"></div>

        <?php

        foreach ($publicacoes as $p) {
            $preco = $p->getPreco();
            $editora = $p->getEditora();
            $autor = $p->getAutor();
            $titulo = $p->getTitulo();

            $isbn = $p->getIsbn();

            echo "
            <table border='0' width='50%' cellspacing='5'>
                <tr>
                    <td rowspan='5' align='center'><img src='../imagens/book_$isbn.jpg' width='200' height='200' border='0'></td>
                </tr>
                <tr align='left'>
                    <td>
                        <b>
                            <font face='Verdana' size='3'>
                            $titulo
                            </font>
                        </b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <font face='Verdana' size='3'>
                        Autor: $autor
                        </font>
                    </td>
                </tr>
                <tr>
                    <td>
                        <font face='Verdana' size='2'>
                           Editora: $editora
                        </font>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>
                            <font face='Verdana' size='5' color='red'>R$ $preco</font>
                        </b>
                    </td>
                    <td><a href='#'><img src='../imagens/botao_comprar2.png' border='0'></a></td>
                </tr>
            </table>

             <hr width='50%'>
            ";
        }

        ?>

    </div>

</body>
</html>
