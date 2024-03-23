<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PageController extends Controller
{
//    /** @var PagesRepository */
//    private $pagesRepository;
//
//    public function __construct(
//        PagesRepository $pagesRepository
//    )
//    {
//        $this->pagesRepository = $pagesRepository;
//    }

    public function page(Request $request): View
    {
//        $page = $this->pagesRepository->findBySlug($request->route('slug'));

        return view('page', [
//            'page' => $page
        ]);
    }
}
