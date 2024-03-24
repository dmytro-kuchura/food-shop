<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\OrdersPaymentsRepository;

class PaymentController extends Controller
{
    private OrdersPaymentsRepository $paymentsRepository;

    public function __construct(OrdersPaymentsRepository $deliveriesRepository)
    {
        $this->paymentsRepository = $deliveriesRepository;
    }

    public function list()
    {
        $result = $this->paymentsRepository->list();
        return $this->returnResponse([
            'success' => true,
            'result' => $result
        ]);
    }
}
