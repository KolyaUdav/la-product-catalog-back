<?php

namespace App\Shaping;

interface IShape
{
    public function getList(): array;

    public function get(int $id): array;

    public function create(array $data): array;

    public function update(array $data): array;

    public function delete(array $data): array;
}
