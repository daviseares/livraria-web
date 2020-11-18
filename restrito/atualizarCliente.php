<?php
session_start();
$cli = $_SESSION['cliente'];
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
                            <li> <a href="formAutor.php">Cadastrar</a>∂</li>
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

        <form action="../controllers/clienteController.php" class="formAutor">
            <p class="cad-autor-title">ATUALIZAR CLIENTE</p><br>
            <input type="text" name="fcpf" placeholder="Cpf" value="<?php echo "$cli->cpf"?>" required readonly>
            <input type="text" name="fnome" placeholder="Nome" value="<?php echo "$cli->nome"?>" required>
            <input type="text" name="flogradouro" placeholder="Logradouro" value="<?php echo "$cli->logradouro"?>" required>
            <input type="text" name="fcidade" placeholder="Cidade" value="<?php echo "$cli->cidade"?>" required>
            <input type="text" name="festado" placeholder="Estado" value="<?php echo "$cli->estado"?>" required>
            <input type="text" name="fcep" placeholder="CEP" value="<?php echo "$cli->cep"?>" required>
            <input type="date" name="fdata_nascimento" value="<?php echo "$cli->data_nascimento"?>" required>
            <input type="email" name="femail" placeholder="E-mail" value="<?php echo "$cli->email"?>" required>
            <input type="text" name="fsenha" placeholder="Senha" value="<?php echo "$cli->senha"?>" required>
            <input type="text" name="frg" placeholder="RG(somente números)" value="<?php echo "$cli->rg"?>" required>
            <input type="text" name="ftipo" placeholder="0 ou 1" value="<?php echo "$cli->tipo"?>" required>
            <input type="hidden" name="option" value="5">
            <button type="submit">ATUALIZAR</button>
        </form>
    </div>
</body>

</html>
