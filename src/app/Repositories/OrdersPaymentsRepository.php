<?php

namespace App\Repositories;

use App\Models\enum\Common;
use App\Models\OrdersPayments;

class OrdersPaymentsRepository implements Repository
{
    protected string $model = OrdersPayments::class;

    public function list()
    {
        return $this->model::where('status', Common::STATUS_ACTIVE)->get();
    }

    public function find($id)
    {
        return $this->model::where('id', $id)->where('status', Common::STATUS_ACTIVE)->first();
    }

    public function store($id, $data)
    {
        // TODO: Implement paginate() method.
    }

    public function create($data)
    {
        // TODO: Implement paginate() method.
    }

    public function destroy($id)
    {
        // TODO: Implement paginate() method.
    }

    public function paginate()
    {
        // TODO: Implement paginate() method.
    }
}
