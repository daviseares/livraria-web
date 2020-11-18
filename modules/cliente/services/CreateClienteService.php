<?php

class CreateClienteService
{
    private $clienteRepository;

    /**
     * Class constructor.
     */
    public function __construct(ClienteRepository $clienteRepository)
    {
        $this->clienteRepository = $clienteRepository;
    }

    public function execute(Cliente $cliente):?Cliente
    {
        $cpf = $cliente->getCpf();

        $clienteExists = $this->clienteRepository->findByCpf($cpf);

        if ($clienteExists) {
            echo('<h1>Já existe cliente cadastrado com o cpf informado</h1>');
            return null;
        }

        $this->clienteRepository->create($cliente);

        return $cliente;
    }
}
