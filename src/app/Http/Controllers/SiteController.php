<?php

namespace App\Http\Controllers;

use App\Models\Enum\SystemPagesConstants;
use App\Repositories\SystemPagesRepository;
use Illuminate\Contracts\View\View;

class SiteController extends Controller
{
    private SystemPagesRepository $pagesRepository;

    public function __construct(SystemPagesRepository $pagesRepository)
    {
        $this->pagesRepository = $pagesRepository;
    }

    public function index(): View
    {
        $page = $this->pagesRepository->findBySlug(SystemPagesConstants::MAIN_PAGE);
        return view('index', [
            'page' => $page
        ]);
    }
}
