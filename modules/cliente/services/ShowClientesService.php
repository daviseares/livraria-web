<?php

class ShowClientesService
{
    private $clienteRepository;

    /**
     * Class constructor.
     */
    public function __construct(ClienteRepository $clienteRepository)
    {
        $this->clienteRepository = $clienteRepository;
    }

    public function execute()
    {

        $clientes = $this->clienteRepository->all();

        return $clientes;
    }
}
