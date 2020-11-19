<?php
require_once('../classes/Publicacao.php');

class ShowPublicacoesService
{
    private $publicacaoRepository;

    /**
     * Class constructor.
     */
    public function __construct(PublicacaoRepository $publicacaoRepository)
    {
        $this->publicacaoRepository = $publicacaoRepository;
    }

    public function execute()
    {
        $publicacoes = array();

        $publi = $this->publicacaoRepository->all();

        foreach ($publi as $p) {
            $editora = $this->publicacaoRepository->findEditora($p->editora_id);
            $livro = $this->publicacaoRepository->findLivro($p->isbn);
            $autor = $this->publicacaoRepository->findAutor($p->autor_id);

            $publicacao = new Publicacao();
            $publicacao->setPublicacao_id($p->publicacao_id);
            $publicacao->setIsbn($p->isbn);
            $publicacao->setTitulo($livro->titulo);

            $publicacao->setAutor($autor->nome);
            $publicacao->setEditora($editora->editora_nome);
            $publicacao->setPreco($p->preco);

            $publicacoes[] = $publicacao;
        }

        return $publicacoes;
    }
}
