<?php

namespace App\Widgets;

use App\Repositories\NewsRepository;
use Arrilot\Widgets\AbstractWidget;

class News extends AbstractWidget
{
    protected $config = [];

    public function run(NewsRepository $newsRepository)
    {
        $news = $newsRepository->recent(6);
        return view('widgets.news', [
            'news' => $news,
            'config' => $this->config,
        ]);
    }
}
