<?php

class CreateLivroService
{
    private  $livroRepository;
    /**
     * Class constructor.
     */
    public function __construct(LivroRepository $livroRepository)
    {
        $this->livroRepository = $livroRepository;
    }

    public function execute(Livro $livro)
    {
        $isbn = $livro->getIsbn();

        $livroExists = $this->livroRepository->findByIsbn($isbn);

        if ($livroExists) {
            echo('<h1>Já existe livro cadastrado com o isbn informado</h1>');
            return null;
        }

        $this->livroRepository->create($livro);

        return $livro;
    }
}
