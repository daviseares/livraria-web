<?php

class ShowLivrosService
{
    private $livroRepository;

    /**
     * Class constructor.
     */
    public function __construct(LivroRepository $livroRepository)
    {
        $this->livroRepository = $livroRepository;
    }

    public function execute()
    {

        $clientes = $this->livroRepository->all();

        return $clientes;
    }
}
