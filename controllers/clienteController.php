<?php
include_once('../classes/Cliente.php');
include_once('../modules/cliente/repositories/ClienteRepository.php');
include_once('../modules/cliente/services/CreateClienteService.php');
include_once('../modules/cliente/services/ShowClientesService.php');
include_once('../modules/cliente/services/GetClienteService.php');
include_once('../modules/cliente/services/DeleteClienteService.php');
include_once('../modules/cliente/services/UpdateClienteService.php');
include_once('../database/conexao.php');

$con = new Conexao();
$clienteRepository = new ClienteRepository($con);

$option = $_REQUEST['option'];

switch ($option) {
    case 1:
        $createClienteService = new CreateClienteService($clienteRepository);

        $cpf = $_REQUEST['fcpf'];
        $nome = $_REQUEST['fnome'];
        $logradouro = $_REQUEST['flogradouro'];
        $cidade = $_REQUEST['fcidade'];
        $estado = $_REQUEST['festado'];
        $cep = $_REQUEST['fcep'];
        $data_nascimento = $_REQUEST['fdata_nascimento'];
        $email = $_REQUEST['femail'];
        $senha = $_REQUEST['fsenha'];
        $rg = $_REQUEST['frg'];
        $tipo = $_REQUEST['ftipo'];

        $cliente = new Cliente(
            $cpf,
            $nome,
            $logradouro,
            $cidade,
            $estado,
            $cep,
            $data_nascimento,
            $email,
            $senha,
            $rg,
            $tipo
        );

        $createdCliente = $createClienteService->execute($cliente);

        if ($createdCliente) {
            echo "
            <script>
            alert('CLIENTE cadastrado com sucesso');
            window.location='http://localhost:8080/www/livrariaweb/controllers/clienteController.php?option=2';
            </script>
            ";
        }

        break;

    case 2:
        $showClientesService = new ShowClientesService($clienteRepository);

        session_start();
        $clientes = $showClientesService->execute();

        $_SESSION['clientes'] =  $clientes;

        header('Location: http://localhost:8080/www/livrariaweb/restrito/exibirClientes.php');

        break;

    case 3:
        $getClienteService = new GetClienteService($clienteRepository);

        $cpf = $_REQUEST['cpf'];
        session_start();

        $cliente = $getClienteService->execute($cpf);

        var_dump($cliente);

        $_SESSION['cliente'] =  $cliente;

        header('Location: http://localhost:8080/www/livrariaweb/restrito/atualizarCliente.php');
        break;

    case 4:
        $deleteClienteService = new DeleteClienteService($clienteRepository);

        $cpf = $_REQUEST['cpf'];
        $deleteClienteService->execute($cpf);

        header('Location: http://localhost:8080/www/livrariaweb/controllers/clienteController.php?option=2');
        break;

    case 5:
        $updateClienteService = new UpdateClienteService($clienteRepository);

        $cpf = $_REQUEST['fcpf'];
        $nome = $_REQUEST['fnome'];
        $logradouro = $_REQUEST['flogradouro'];
        $cidade = $_REQUEST['fcidade'];
        $estado = $_REQUEST['festado'];
        $cep = $_REQUEST['fcep'];
        $data_nascimento = $_REQUEST['fdata_nascimento'];
        $email = $_REQUEST['femail'];
        $senha = $_REQUEST['fsenha'];
        $rg = $_REQUEST['frg'];
        $tipo = $_REQUEST['ftipo'];

        $cliente = new Cliente(
            $cpf,
            $nome,
            $logradouro,
            $cidade,
            $estado,
            $cep,
            $data_nascimento,
            $email,
            $senha,
            $rg,
            $tipo
        );

        $updateClienteService->execute($cliente);

        header('Location: http://localhost:8080/www/livrariaweb/controllers/clienteController.php?option=2');
        break;
    default:
        break;
}
