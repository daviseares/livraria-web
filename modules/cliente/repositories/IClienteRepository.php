<?php
interface IClienteRepository
{
    public function create(Cliente $client): void;
    public function update(Cliente $autor):void;
    public function delete(string $cpf):void;
    public function all();//mostra todos autores
    public function findByCpf(string $email): ?stdClass;
    public function converteDataMysql($data);
}
