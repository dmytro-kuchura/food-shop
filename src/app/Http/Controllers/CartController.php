<?php

namespace App\Http\Controllers;

use App\Models\Enum\SystemPagesConstants;
use App\Repositories\SystemPagesRepository;
use Illuminate\Contracts\View\View;

class CartController extends Controller
{
    private SystemPagesRepository $pagesRepository;

    public function __construct(SystemPagesRepository $pagesRepository)
    {
        $this->pagesRepository = $pagesRepository;
    }

    public function cart(): View
    {
        $page = $this->pagesRepository->findBySlug(SystemPagesConstants::CART_PAGE);

        return view('cart', [
            'page' => $page
        ]);
    }
}
