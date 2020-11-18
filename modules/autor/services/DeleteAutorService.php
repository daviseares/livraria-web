<?php

class DeleteAutorService
{
    private $autorRepository;

    /**
     * Class constructor.
     */
    public function __construct(AutorRepository $autorRepository)
    {
        $this->autorRepository = $autorRepository;
    }

    public function execute(string $id)
    {

        $foundAutor = $this->autorRepository->findById($id);

        if(!$foundAutor){
            return "Autor não existe";
        }

        $this->autorRepository->delete($id);
    }
}
