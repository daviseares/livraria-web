<HTML>

<head>
    <title>Cadastrar Livro</title>
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
                <li>Cadastrar Livro</li>
            </ul>
        </div>
        <div class="divider"></div>
        <form action="../controllers/livroController.php" class="formAutor">
            <p class="cad-autor-title">CADASTRAR LIVRO</p><br>
            <input type="text" name="fisbn" placeholder="isbn" size="13">
            <input type="text" name="ftitulo" placeholder="Título">
            <input type="text" name="fedicao_num" placeholder="Num Edição">
            <input type="text" name="fano_publicacao" placeholder="Ano de Publicação">
            <input type="text" name="fdescricao" placeholder="Descrição">
            <input type="hidden" name="option" value="1">
            <button type="submit">CADASTRAR</button>
        </form>

    </div>
</body>

</html>
