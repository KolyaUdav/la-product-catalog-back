<?php

namespace App\Shaping;

use App\Models\CatalogItem;

class ShapeCatalogItem implements IShape
{

    public function getList(): array
    {
        $dataArr = array();

        foreach (CatalogItem::all() as $catalog) {
            $dataArr['data'][] = $catalog;
        }

        return $dataArr;
    }

    public function get(int $id): array {
        return array('data' => CatalogItem::where('id', $id)->get()[0]);
    }

    public function create(array $data): array
    {
        return array();
    }

    public function update(array $data): array
    {
        return array();
    }

    public function delete(array $data): array
    {
        return array();
    }
}
