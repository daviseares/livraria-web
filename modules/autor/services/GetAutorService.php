<?php

class GetAutorService
{
    private $autorRepository;

    /**
     * Class constructor.
     */
    public function __construct(AutorRepository $autorRepository)
    {
        $this->autorRepository = $autorRepository;
    }

    public function execute(string $id):?stdClass
    {

        $autor = $this->autorRepository->findById($id);

        return $autor;
    }
}
