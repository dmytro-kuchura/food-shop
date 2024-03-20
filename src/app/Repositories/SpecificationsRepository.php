<?php

namespace App\Repositories;

use App\Models\Enum\Common;
use App\Models\Specifications;

class SpecificationsRepository implements Repository
{
    protected string $model = Specifications::class;

    public function paginate()
    {
        // TODO implements
    }

    public function find($id)
    {
        // TODO implements
    }

    public function store($id, $data)
    {
        // TODO implements
    }

    public function create($data)
    {
        // TODO implements
    }

    public function destroy($id)
    {
        // TODO implements
    }

    public function all()
    {
        return $this->model::where('status', Common::STATUS_ACTIVE)->get();
    }
}
