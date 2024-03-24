<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 */
class OrdersPayments extends Model
{
    protected $table = 'orders_payments';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'status',
        'created_at',
        'updated_at'
    ];
}
