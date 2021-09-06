<?php

namespace App\Handling;

interface IHandle
{
    public function getList(): IHandle;

    public function get(int $id): IHandle;

    public function create(array $data): IHandle;

    public function update(array $data): IHandle;

    public function delete(array $data): IHandle;
}
