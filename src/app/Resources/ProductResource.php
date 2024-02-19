<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class ProductResource extends Resource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'alias' => $this->alias,
            'category_id' => $this->category_id,
            'status' => $this->status,
            'new' => $this->new,
            'sale' => $this->sale,
            'available' => $this->available,
            'cost' => $this->cost,
            'cost_old' => $this->cost_old,
            'brand' => $this->brand,
            'image' => $this->image,
            'title' => $this->title,
            'description' => $this->description,
            'keywords' => $this->keywords,
        ];
    }
}
