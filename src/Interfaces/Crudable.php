<?php
namespace Blogufy\Crud\Interfaces;

/**
 * Able to perform CRUD activities
 */
interface Crudable
{
    public function make(int|null $id, array $data);

    public function one(int|string $id);

    public function list(int|string $limit = 10, array $cols = ['*']);

    public function paginate(int|string $limit = 10, array $cols = ['*']);

    public function remove(int|string $id);

}
