<?php

class GetClienteService
{
    private $clienteRepository;

    /**
     * Class constructor.
     */
    public function __construct(ClienteRepository $clienteRepository)
    {
        $this->clienteRepository = $clienteRepository;
    }

    public function execute(string $cpf):?stdClass
    {

        $cliente = $this->clienteRepository->findByCpf($cpf);

        return $cliente;
    }
}
