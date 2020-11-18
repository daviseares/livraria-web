<?php

class CreateAutorService
{
    private $autorRepository;

    /**
     * Class constructor.
     */
    public function __construct(AutorRepository $autorRepository)
    {
        $this->autorRepository = $autorRepository;
    }

    public function execute(Autor $autor): ?Autor
    {
        $email = $autor->getEmail();

        $autorExists = $this->autorRepository->findByEmail($email);

        if ($autorExists) {
            echo('<h1>Já existe autor cadastrado com o email informado</h1>');
            return null;
        }

        $this->autorRepository->create($autor);

        return $autor;
    }
}
