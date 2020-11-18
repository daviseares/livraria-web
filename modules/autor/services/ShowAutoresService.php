<?php

class ShowAutoresService
{
    private $autorRepository;

    /**
     * Class constructor.
     */
    public function __construct(AutorRepository $autorRepository)
    {
        $this->autorRepository = $autorRepository;
    }

    public function execute()
    {

        $autores = $this->autorRepository->all();

        return $autores;
    }
}
