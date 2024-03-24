<?php

namespace App\Repositories;

use App\Models\User;

class UsersRepository
{
    private string $model = User::class;

    public function count()
    {
        return $this->model::count();
    }
}
