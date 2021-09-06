<?php

namespace App\Handling;

use App\Shaping\ShapeCatalogItem;
use Illuminate\Http\JsonResponse;

class HandleCatalogItem implements IHandle
{

    private $serverResponse;
    private $shape;

    public function __construct(ShapeCatalogItem $shape) {
        $this->shape = $shape;
    }

    public function getList(): IHandle
    {
        $this->serverResponse = $this->shape->getList();

        return $this;
    }

    public function get($id): IHandle {
        $this->serverResponse = $this->shape->get($id);

        return $this;
    }

    public function create(array $data): IHandle
    {
        return $this;
    }

    public function update(array $data): IHandle
    {
        return $this;
    }

    public function delete(array $data): IHandle
    {
        return $this;
    }

    /**
     * @return JsonResponse
     */
    public function prepare(): JsonResponse
    {
        return response()->json($this->serverResponse);
    }
}
