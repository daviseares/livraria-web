<?php
session_start();
$autores = $_SESSION['autores'];
?>

<html>

<head>
    <title>Pagina Inicial</title>
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

        .showautores {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

            max-width: 1440px;
            width: 100%;

            align-self: center;
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
                            <li><a href="../controllers/clienteController.php?option=2">Consultar Todos</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Autores</a>
                        <ul>
                            <li>
                                <a href="formAutor.php">Cadastrar</a>
                            </li>
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
                <li>Todos os Autores</li>
            </ul>
        </div>

        <div class="showautores">
            <h3 id="titleshow">
                Lista de todos os Autores
            </h3>

            <table>
                <tr>
                    <th>Autor Id</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Data de Nascimento</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php
                foreach ($autores as $au) {
                    echo "
                            <tr>
                                <td>$au->autor_id</td>
                                <td>$au->nome</td>
                                <td>$au->email</td>
                                <td>$au->dt_nasc</td>
                            " . '<td>
                                    <a class="blue"
                                       href="../controllers/autorController.php?option=3&id=' . $au->autor_id . '">
                                    Editar
                                    </a>
                                </td>
                                <td class="red">
                                    <a class="red"
                                       href="../controllers/autorController.php?option=4&id=' . $au->autor_id . '">
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
