<?php

namespace App\Repositories;

use App\Models\OrdersDeliveries;
use App\Models\enum\Common;

class OrdersDeliveriesRepository implements Repository
{
    protected $model = OrdersDeliveries::class;

    public function list()
    {
        return $this->model::where('status', Common::STATUS_ACTIVE)->orderBy('id', 'asc')->get();
    }

    public function paginate()
    {
        // TODO: Implement paginate() method.
    }

    public function find(int $id)
    {
        // TODO: Implement find() method.
    }

    public function create(array $data)
    {
        // TODO: Implement create() method.
    }

    public function store(int $id, array $data)
    {
        // TODO: Implement store() method.
    }

    public function destroy(int $id)
    {
        // TODO: Implement destroy() method.
    }
}
