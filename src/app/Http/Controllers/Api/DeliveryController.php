<?php

namespace App\Http\Controllers\Api;

use App\Repositories\OrdersDeliveriesRepository;
use App\Http\Controllers\Controller;

class DeliveryController extends Controller
{
    private OrdersDeliveriesRepository $deliveriesRepository;

    public function __construct(OrdersDeliveriesRepository $deliveriesRepository)
    {
        $this->deliveriesRepository = $deliveriesRepository;
    }

    public function list()
    {
        $result = $this->deliveriesRepository->list();
        return $this->returnResponse([
            'success' => true,
            'result' => $result
        ]);
    }
}
