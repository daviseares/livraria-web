<?php
session_start();
$clientes = $_SESSION['clientes'];
?>

<html>

<head>
    <title>Todos os Livros</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">

    <script>
        function remove(au) {
            console.log('isso é um teste');
        }
    </script>

    <style>
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }

        th,
        td {
            text-align: left;
            padding: 16px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .show {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

            max-width: 1440px;
            width: 100%;
        }

        h3#titleshow {
            padding: 30px 0;
        }

        .blue {
            color: cornflowerblue;
            cursor: pointer;
        }

        .red {
            color: red;
            cursor: pointer;
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="topo"></div>

        <div class="barra">
            <nav>
                <ul class="menu">
                    <li><a href="../">Home</a></li>
                    <li><a href="#">Quem somos?</a></li>
                    <li><a href="#">Clientes</a>
                        <ul>
                            <li><a href="formCliente.php">Cadastrar</a></li>
                            <li><a href="#">Consultar Todos</a></li>
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
                <li>Todos os Livros</li>
            </ul>
        </div>


        <div class="show">
            <h3 id="titleshow">
                Lista de todos os Livros
            </h3>

            <table>
                <tr>
                    <th>isbn</th>
                    <th>Num Edição</th>
                    <th>Ano de Publicação</th>
                    <th>Descrição</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php
                foreach ($clientes as $lr) {
                    echo "
                            <tr>
                                <td>$lr->isbn</td>
                                <td>$lr->titulo</td>
                                <td>$lr->edicao_num</td>
                                <td>$lr->ano_publicacao</td>
                                <td>$lr->descricao</td>
                            " . '<td>
                                    <a class="blue"
                                       href="../controllers/livroController.php?option=3&isbn=' . $lr->isbn . '">
                                    Editar
                                    </a>
                                </td>
                                <td class="red">
                                    <a class="red"
                                       href="../controllers/livroController.php?option=4&isbn=' . $lr->isbn . '">
                                       Deletar
                                    </a>
                                </td>
                            </tr>';
                }
                ?>
            </table>
        </div>
    </div>
</body>

</html>
