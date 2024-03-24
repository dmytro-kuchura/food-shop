<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Alert;
use App\Http\Controllers\Controller;
use App\Repositories\OrdersRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    private OrdersRepository $ordersRepository;

    public function __construct(OrdersRepository $ordersRepository)
    {
        $this->ordersRepository = $ordersRepository;
    }

    public function list(): View|RedirectResponse
    {
        if (!Auth::check()) {
            Alert::warning('Ой, а Вы точно администратор?', 'Слабо верится! :)');
            return redirect(route('home'));
        }
        if (Auth::user() && !Auth::user()->isAdmin()) {
            Alert::warning('Ой, а Вы точно администратор?', 'Слабо верится! :)');
            return redirect(route('home'));
        }
        $orders = $this->ordersRepository->paginate();
        return view('admin.orders.list', [
            'orders' => $orders
        ]);
    }
}
