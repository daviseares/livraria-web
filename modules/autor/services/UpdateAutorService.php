<?php

class UpdateAutorService
{
    private $autorRepository;

    /**
     * Class constructor.
     */
    public function __construct(AutorRepository $autorRepository)
    {
        $this->autorRepository = $autorRepository;
    }

    public function execute(Autor $autor)
    {
        $id = $autor->getAutor_id();

        $foundAutor = $this->autorRepository->findById($id);

        if (!$foundAutor) {
            return "Autor não existe";
        }

        $this->autorRepository->update($autor);
    }
}
