<?php

namespace App\Http\Controllers;

use App\Models\Enum\SystemPagesConstants;
use App\Repositories\CatalogProductsRepository;
use App\Repositories\CatalogCategoriesRepository;
use App\Repositories\SystemPagesRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    private CatalogCategoriesRepository $catalogRepository;

    private CatalogProductsRepository $productsRepository;

    private SystemPagesRepository $pagesRepository;

    public function __construct(
        CatalogProductsRepository   $productsRepository,
        SystemPagesRepository       $pagesRepository,
        CatalogCategoriesRepository $catalogRepository
    )
    {
        $this->productsRepository = $productsRepository;
        $this->catalogRepository = $catalogRepository;
        $this->pagesRepository = $pagesRepository;
    }

    public function index(): View
    {
        $page = $this->pagesRepository->findBySlug(SystemPagesConstants::SHOP_PAGE);
        $categories = $this->catalogRepository->getMainCategories();
        return view('shop.index', [
            'categories' => $categories,
            'page' => $page,
        ]);
    }

    public function category(Request $request): View
    {
        $result = $this->productsRepository->byCategory($request->route('category'), $request->input());
        $filter = $this->productsRepository->byFilter($request->route('category'), $request->input());
        $categories = $this->catalogRepository->getParents($request->route('category'));
        $category = $this->catalogRepository->findByAlias($request->route('category'));
        return view('shop.category', [
            'result' => $result,
            'categories' => $categories,
            'category' => $category,
            'filter' => $filter,
        ]);
    }

    public function item(Request $request): View
    {
        $result = $this->productsRepository->find($request->route('id'));
        if (!$result) {
            abort(404, 'Page not found');
        }
        return view('shop.item', [
            'result' => $result
        ]);
    }
}
