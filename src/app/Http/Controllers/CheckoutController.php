<?php

namespace App\Http\Controllers;

use App\Models\enum\SystemPagesConstants;
use App\Repositories\SystemPagesRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    private SystemPagesRepository $pagesRepository;

    public function __construct(SystemPagesRepository $pagesRepository)
    {
        $this->pagesRepository = $pagesRepository;
    }

    public function checkout(): View
    {
        $page = $this->pagesRepository->findBySlug(SystemPagesConstants::CHECKOUT_PAGE);
        return view('checkout', [
            'user' => Auth::check() ? Auth::user() : null,
            'page' => $page
        ]);
    }

    public function thank(): View
    {
        $page = $this->pagesRepository->findBySlug(SystemPagesConstants::CART_PAGE);
        return view('thank', [
            'page' => $page
        ]);
    }
}
