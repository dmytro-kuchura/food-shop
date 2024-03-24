<?php

namespace App\Repositories;

use App\Models\CatalogProduct;
use App\Models\Enum\Common;
use Illuminate\Support\Facades\DB;

class CatalogProductsRepository implements Repository
{
    protected string $model = CatalogProduct::class;

    public function paginate()
    {
        return $this->model::orderBy('id', 'desc')->paginate(Common::PAGINATE_LIMIT);
    }

    public function find(int $id)
    {
        return $this->model::where('id', $id)->first();
    }

    public function store(int $id, array $data)
    {
        return $this->model::where('id', $id)->update([
            'name' => $data['name'],
            'category_id' => $data['category_id'],
            'new' => $data['new'],
            'sale' => $data['sale'],
            'top' => $data['top'],
            'available' => $data['available'],
            'cost' => $data['cost'],
            'cost_old' => $data['cost_old'],
            'artikul' => $data['artikul'],
            'information' => $data['information'],
            'description' => $data['description'],
            'title' => $data['name'],
        ]);
    }

    public function create(array $data)
    {
        $model = new $this->model;

        $model->name = $data['name'];
        $model->alias = $data['alias'];
        $model->category_id = $data['category_id'];
        $model->status = 1;
        $model->new = $data['new'];
        $model->sale = $data['sale'];
        $model->top = $data['top'];
        $model->available = $data['available'];
        $model->cost = $data['cost'];
        $model->cost_old = $data['cost_old'];
        $model->brand = isset($data['brand']) ?? $data['brand'];
        $model->artikul = $data['artikul'];
        $model->specifications = isset($data['specifications']) ?? $data['specifications'];
        $model->information = $data['information'];
        $model->title = $data['title'];
        $model->description = $data['description'];

        return $model->save();
    }

    public function destroy(int $id)
    {
        return $this->model::where('id', $id)->delete();
    }

    public function byFilter(string $alias, ?array $params)
    {
        $query = $this->model::join('catalog_categories', 'catalog_categories.id', '=', 'catalog_products.category_id')
            ->select(
                DB::raw('MAX(catalog_products.cost) as max'),
                DB::raw('MIN(catalog_products.cost) as min')
            )
            ->where('catalog_categories.alias', $alias)
            ->where('catalog_products.status', Common::STATUS_ACTIVE);

        $query = $this->sortable($query, $params);

        return $query->get();
    }

    public function byCategory(string $alias, ?array $params)
    {
        $query = $this->model::join('catalog_categories', 'catalog_categories.id', '=', 'catalog_products.category_id')
            ->select('catalog_products.*')
            ->where('catalog_categories.alias', $alias)
            ->where('catalog_products.status', Common::STATUS_ACTIVE);

        $query = $this->sortable($query, $params);

        $query = $this->filter($query, $params);

        $limit = isset($params['limit']) ? $params['limit'] : Common::PAGINATE_LIMIT;

        return $query->paginate($limit);
    }

    public function sortable($query, ?array $array)
    {

        if (!isset($array['sort']) && !isset($array['type'])) {
            return $query;
        }

        switch ($array['sort']) {
            case 'price':
                if ($array['type'] === 'desc') {
                    $query->orderBy('cost', 'desc');
                } else {
                    $query->orderBy('cost', 'asc');
                }
                break;
            case 'name':
                if ($array['type'] === 'desc') {
                    $query->orderBy('name', 'desc');
                } else {
                    $query->orderBy('name', 'asc');
                }
                break;
            default:
                $query->orderBy('id', 'desc');
                break;
        }

        return $query;
    }

    public function filter($query, ?array $array)
    {
        if (!isset($array['min-cost']) && !isset($array['max-cost'])) {
            return $query;
        }

        if ($array['min-cost'] !== null) {
            $query->where('cost', '>=', (int)$array['min-cost']);
        }
        if ($array['max-cost'] !== null) {
            $query->where('cost', '<=', (int)$array['max-cost']);
        }

        return $query;
    }

    public function search(string $query)
    {
        return $this->model::where('status', Common::STATUS_ACTIVE)
            ->where('name', 'like', '%' . $query . '%')
            ->paginate(Common::PAGINATE_LIMIT);
    }

    public function updateImage($data)
    {
        return $this->model::where('id', $data['id'])->update(['image' => $data['link']]);
    }

    public function getSpecial(int $limit)
    {
        return $this->model::where('status', Common::STATUS_ACTIVE)
            ->where(function ($query) {
                $query->where('sale', true)->orWhere('new', true);
            })
            ->whereNotNull('image')
            ->limit($limit)
            ->inRandomOrder()
            ->get();
    }

    public function getMostViewed(int $limit)
    {
        return $this->model::where('status', Common::STATUS_ACTIVE)
            ->whereNotNull('image')
            ->limit($limit)
            ->inRandomOrder()
            ->get();
    }

    public function getLatest(int $limit)
    {
        return $this->model::where('status', Common::STATUS_ACTIVE)
            ->where('new', true)
            ->whereNotNull('image')
            ->limit($limit)
            ->inRandomOrder()
            ->get();
    }

    public function findByArtikul(string $artikul)
    {
        return $this->model::where('artikul', $artikul)->first();
    }

    public function all()
    {
        return $this->model::where('status', Common::STATUS_ACTIVE)->get();
    }

    public function count()
    {
        return $this->model::count();
    }
}
