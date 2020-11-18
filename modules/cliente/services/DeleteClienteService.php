<?php

class DeleteClienteService
{
    private $clienteRepository;

    /**
     * Class constructor.
     */
    public function __construct(ClienteRepository $clienteRepository)
    {
        $this->clienteRepository = $clienteRepository;
    }

    public function execute(string $cpf)
    {

        $foundAutor = $this->clienteRepository->findByCpf($cpf);

        if(!$foundAutor){
            return "Cliente não existe";
        }

        $this->clienteRepository->delete($cpf);
    }
}
