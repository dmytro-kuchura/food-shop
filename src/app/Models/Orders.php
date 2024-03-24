<?php

namespace App\Models;

use App\Traits\Date;
use App\Traits\OrderTotal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @property int $id
 * @property int $user_id
 * @property int $delivery
 * @property int $payment
 * @property int $status
 * @property string $user_lang
 * @property string $phone
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $email
 * @property string $comment
 * @property string $ip
 * @property string $created_at
 * @property string $updated_at
 *
 * @property OrdersItems $items
 * @property OrdersPayments $paymentType
 */
class Orders extends Model
{
    use Date, OrderTotal;

    protected $table = 'orders';

    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'delivery',
        'payment',
        'status',
        'created_at',
        'updated_at'
    ];

    public function items(): HasMany
    {
        return $this->hasMany('App\Models\OrdersItems', 'order_id');
    }

    public function paymentType(): HasOne
    {
        return $this->hasOne('App\Models\OrdersPayments', 'payment');
    }


    public function getUkrainianDate(): string
    {
        return $this->getHumanDate($this->created_at);
    }

    public function getOrderTotal(): string
    {
        return $this->getTotal($this->items);
    }
}
