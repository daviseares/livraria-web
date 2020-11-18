<HTML>

<head>
    <title>Pagina Inicial</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">


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
                            <li><a href="#">Cadastrar</a></li>
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
                <li>Cadastrar Cliente</li>
            </ul>
        </div>
        <div class="divider"></div>
        <form action="../controllers/clienteController.php" class="formAutor">
            <p class="cad-autor-title">CADASTRAR CLIENTE</p><br>
            <input type="text" name="fcpf" placeholder="Cpf" required>
            <input type="text" name="fnome" placeholder="Nome" required>
            <input type="text" name="flogradouro" placeholder="Logradouro" required>
            <input type="text" name="fcidade" placeholder="Cidade" required>
            <input type="text" name="festado" placeholder="Estado" required>
            <input type="text" name="fcep" placeholder="CEP" required>
            <input type="date" name="fdata_nascimento" required>
            <input type="email" name="femail" placeholder="E-mail" required>
            <input type="text" name="fsenha" placeholder="Senha" required>
            <input type="text" name="frg" placeholder="RG(somente números)" required>
            <input type="text" name="ftipo" placeholder="0 ou 1" required>
            <input type="hidden" name="option" value="1">
            <button type="submit">CADASTRAR</button>
        </form>

    </div>
</body>

</html>
