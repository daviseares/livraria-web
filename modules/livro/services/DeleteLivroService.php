<?php
class DeleteLivroService
{
    /**
     * Class constructor.
     */
    public function __construct(LivroRepository $livroRepository)
    {
        $this->livroRepository = $livroRepository;
    }

    public function execute(string $isbn)
    {

        $livroExists = $this->livroRepository->findByIsbn($isbn);

        if (!$livroExists) {
            echo ('<h1>Livro não existe</h1>');
            return null;
        }

        $this->livroRepository->delete($isbn);
    }
}
