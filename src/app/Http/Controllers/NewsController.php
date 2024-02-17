<?php

namespace App\Http\Controllers;

use App\Models\Enum\SystemPagesConstants;
use App\Repositories\NewsRepository;
use App\Repositories\SystemPagesRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    private NewsRepository $newsRepository;

    private SystemPagesRepository $pagesRepository;

    public function __construct(NewsRepository $newsRepository, SystemPagesRepository $pagesRepository)
    {
        $this->newsRepository = $newsRepository;
        $this->pagesRepository = $pagesRepository;
    }

    public function index(): View
    {
        $page = $this->pagesRepository->findBySlug(SystemPagesConstants::NEWS_PAGE);
        $news = $this->newsRepository->paginate();
        return view('news.index', [
            'news' => $news,
            'page' => $page
        ]);
    }

    public function inner(Request $request): View
    {
        $news = $this->newsRepository->findByAlias($request->route('alias'));
        return view('news.inner', [
            'news' => $news,
            'comments' => []
        ]);
    }
}
