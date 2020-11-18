<?php
interface IAutorRepository
{
    public function create(Autor $autor): void;
    public function delete(string $id):void;
    public function update(Autor $autor):void;
    public function all();//mostra todos autores
    public function findByEmail(string $email): ?stdClass;
    public function findById(string $id): ?stdClass;
    public function converteDataMysql($data);
}
