<?php

namespace App\Widgets;

use App\Repositories\CatalogRepository;
use App\Repositories\CatalogProductsRepository;
use Arrilot\Widgets\AbstractWidget;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class Breadcrumbs extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    public function run(
        CatalogProductsRepository $productsRepository,
        CatalogRepository         $catalogRepository,
        Request                   $request
    )
    {
        $uri = Route::currentRouteName();
        $slug = $request->route('slug') ?? $request->route('slug');

        switch ($uri) {
            case 'search':
                $breadcrumbs = [
                    [
                        'label' => __('breadcrumbs.index.title'),
                        'link' => route('home'),
                    ],
                    [
                        'label' => __('breadcrumbs.search.title'),
                    ],
                ];

                $page = __('breadcrumbs.search.title');
                break;
            case 'about':
                $breadcrumbs = [
                    [
                        'label' => __('breadcrumbs.index.title'),
                        'link' => route('home'),
                    ],
                    [
                        'label' => __('breadcrumbs.about.title'),
                    ],
                ];

                $page = __('breadcrumbs.about.title');
                break;
            case 'profile':
                $breadcrumbs = [
                    [
                        'label' => __('breadcrumbs.index.title'),
                        'link' => route('home'),
                    ],
                    [
                        'label' => __('breadcrumbs.profile.title'),
                    ],
                ];

                $page = __('breadcrumbs.profile.title');
                break;
            case 'login':
                $breadcrumbs = [
                    [
                        'label' => __('breadcrumbs.index.title'),
                        'link' => route('home'),
                    ],
                    [
                        'label' => __('breadcrumbs.login.title'),
                    ],
                ];

                $page = __('breadcrumbs.login.title');
                break;
            case 'register':
                $breadcrumbs = [
                    [
                        'label' => __('breadcrumbs.index.title'),
                        'link' => route('home'),
                    ],
                    [
                        'label' => __('breadcrumbs.register.title'),
                    ],
                ];

                $page = __('breadcrumbs.register.title');
                break;
            case 'cart':
                $breadcrumbs = [
                    [
                        'label' => __('breadcrumbs.index.title'),
                        'link' => route('home'),
                    ],
                    [
                        'label' => __('breadcrumbs.cart.title'),
                    ],
                ];

                $page = __('breadcrumbs.cart.title');
                break;
            case 'wishlist':
                $breadcrumbs = [
                    [
                        'label' => __('breadcrumbs.index.title'),
                        'link' => route('home'),
                    ],
                    [
                        'label' => __('breadcrumbs.wishlist.title'),
                    ],
                ];

                $page = __('breadcrumbs.wishlist.title');
                break;
            case 'news.index':
            case 'news.inner':
                $breadcrumbs = [
                    [
                        'label' => __('breadcrumbs.index.title'),
                        'link' => route('home'),
                    ],
                    [
                        'label' => __('breadcrumbs.news.title'),
                    ],
                ];

                $page = __('breadcrumbs.news.title');
                break;
            case 'shop.index':
                $breadcrumbs = [
                    [
                        'label' => __('breadcrumbs.index.title'),
                        'link' => route('home'),
                    ],
                    [
                        'label' => __('breadcrumbs.shop.title'),
                    ],
                ];

                $page = __('breadcrumbs.shop.title');
                break;
            case 'shop.category':
                $categories = $catalogRepository->getTreeForBreadcrumbs(Route::current()->parameter('category'));

                $breadcrumbs = [
                    [
                        'label' => __('breadcrumbs.index.title'),
                        'link' => route('home'),
                    ],
                ];

                $categories = array_reverse($categories);
                $length = count($categories) - 1;

                foreach ($categories as $key => $category) {
                    if ($length !== $key) {
                        $breadcrumbs[] = [
                            'label' => $category->name,
                            'link' => route('shop.category', ['category' => $category->alias])
                        ];
                    } else {
                        $breadcrumbs[] = [
                            'label' => $category->name,
                        ];
                    }
                }

                $page = $category->title ? $category->title : $category->name;
                break;
            case 'shop.item':
                $item = $productsRepository->find(Route::current()->parameter('id'));
                $category = $catalogRepository->findById($item->category_id);
                $categories = $catalogRepository->getTreeForBreadcrumbs($category->alias);

                $breadcrumbs = [
                    [
                        'label' => __('breadcrumbs.index.title'),
                        'link' => route('home'),
                    ],
                ];

                $categories = array_reverse($categories);

                foreach ($categories as $key => $category) {
                    $breadcrumbs[] = [
                        'label' => $category->name,
                        'link' => route('shop.category', ['category' => $category->alias])
                    ];
                }

                $pageName = explode(',', $item->name);

                $breadcrumbs[] = [
                    'label' => $pageName[0],
                ];

                $page = $pageName[0];
                break;
            default:
                $breadcrumbs = [];
                $page = __('breadcrumbs.index.title');
                break;
        }

        return view('widgets.breadcrumbs', [
            'config' => $this->config,
            'breadcrumbs' => $breadcrumbs,
            'page' => $page,
        ]);
    }
}
