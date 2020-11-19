<?php

class Publicacao
{
    private $publicacao_id;
    private $isbn;
    private $titulo;
    private $autor;
    private $editora;
    private $preco;

    /**
     * Class constructor.
     */
    public function __construct() {}

    //fazer os getter/setter

    /**
     * Get the value of publicacao_id
     */
    public function getPublicacao_id()
    {
        return $this->publicacao_id;
    }

    /**
     * Set the value of publicacao_id
     *
     * @return  self
     */
    public function setPublicacao_id($publicacao_id)
    {
        $this->publicacao_id = $publicacao_id;

        return $this;
    }

    /**
     * Get the value of isbn
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Set the value of isbn
     *
     * @return  self
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * Get the value of titulo
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of autor
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     *
     * @return  self
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get the value of editora
     */
    public function getEditora()
    {
        return $this->editora;
    }

    /**
     * Set the value of editora
     *
     * @return  self
     */
    public function setEditora($editora)
    {
        $this->editora = $editora;

        return $this;
    }

    /**
     * Get the value of preco
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * Set the value of preco
     *
     * @return  self
     */
    public function setPreco($preco)
    {
        $this->preco = $preco;

        return $this;
    }
}
