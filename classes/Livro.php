<?php

class Livro
{
    private  $isbn;
    private  $titulo;
    private  $edicao_num;
    private  $ano_publicacao;
    private  $descricao;

    /**
     * Class constructor.
     */
    function __construct(
        string $isbn,
        string $titulo,
        string $edicao_num,
        string $ano_publicacao,
        string $descricao
    ) {
        $this->isbn = $isbn;
        $this->titulo = $titulo;
        $this->edicao_num = $edicao_num;
        $this->ano_publicacao = $ano_publicacao;
        $this->descricao = $descricao;
    }

    public function getBook()
    {
        return array(
            $this->isbn,
            $this->titulo,
            $this->edicao_num,
            $this->ano_publicacao,
            $this->descricao,
        );
    }

    /**
     * Get the value of isbn
     */
    public function getIsbn()
    {
        return $this->isbn;
    }
}
