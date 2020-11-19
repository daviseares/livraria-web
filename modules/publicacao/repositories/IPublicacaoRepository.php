<?php
interface IPublicacaoRepository
{
    public function all(); //captura todas as publicacoes
    public function findById(string $publicacao_id): ?stdClass;
    public function findEditora(string $id): ?stdClass;
    public function findLivro(string $isbn): ?stdClass;
    public function findAutor(string $autor_id): ?stdClass;
}
