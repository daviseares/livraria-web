<?php
interface ILivroRepository
{
    public function create(Livro $livro): void;
    public function update(Livro $livro):void;
    public function delete(string $isbn):void;
    public function all();//mostra todos autores
    public function findByIsbn(string $isbn): ?stdClass;

}
