<?php
session_start();
$autor = $_SESSION['autor'];
?>
<html>

<head>
    <title>Pagina Inicial</title>
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
                    <li><a href="#">Home</a></li>
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
                <li>Atualizar</li>
            </ul>
        </div>

        <div class="divider"></div>

        <form action="../controllers/autorController.php" class="formAutor">
            <p class="cad-autor-title">ATUALIZAR AUTOR</p><br>
            <input type="text" name="fnome" placeholder="Nome" value="<?php echo "$autor->nome" ?>" required>
            <input type="email" name="femail" placeholder="E-mail" value="<?php echo "$autor->email" ?>" required>
            <input type="date" name="fdata" value="<?php echo "$autor->dt_nasc" ?>" required>
            <input type="hidden" name="id" value="<?php echo "$autor->autor_id"?>">
            <input type="hidden" name="option" value="5">
            <button type="submit">ATUALIZAR</button>
        </form>
    </div>
</body>

</html>
