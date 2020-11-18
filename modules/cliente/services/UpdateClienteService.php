<?php

class UpdateClienteService
{
    private $clienteRepository;

    /**
     * Class constructor.
     */
    public function __construct(ClienteRepository $clienteRepository)
    {
        $this->clienteRepository = $clienteRepository;
    }

    public function execute(Cliente $cliente)
    {
        $cpf = $cliente->getCpf();

        $foundAutor = $this->clienteRepository->findByCpf($cpf);

        if (!$foundAutor) {
            return "Cliente não existe";
        }

        $this->clienteRepository->update($cliente);
    }
}
