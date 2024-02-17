<?php

namespace App\Repositories;

use App\Models\SystemPage;

class SystemPagesRepository implements Repository
{
    protected string $model = SystemPage::class;

    public function paginate()
    {
        // TODO: Implement paginate() method.
    }

    public function find(int $id)
    {
        // TODO: Implement find() method.
    }

    public function findBySlug(string $slug)
    {
        return $this->model::where('slug', $slug)->first();
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
