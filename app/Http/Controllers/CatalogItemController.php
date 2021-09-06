<?php

namespace App\Http\Controllers;

use App\Handling\HandleCatalogItem;
use App\Handling\IHandle;
use Illuminate\Http\JsonResponse;

class CatalogItemController extends Controller
{

    public function list(IHandle $handler): JsonResponse
    {
        return $handler->getList()->prepare();
    }

    public function get($id, IHandle $handler): JsonResponse {
        return $handler->get($id)->prepare();
    }
}
