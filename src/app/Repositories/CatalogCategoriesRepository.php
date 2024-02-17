<?php

namespace App\Repositories;

use App\Models\CatalogCategories;
use App\Models\Enum\Common;

class CatalogCategoriesRepository
{
    protected string $model = CatalogCategories::class;

    public function getTree(): array
    {
        $tree = [];

        $result = $this->model::where('status', Common::STATUS_ACTIVE)->orderBy('sort')->get();

        foreach ($result as $obj) {
            $tree[$obj->parent_id][] = $obj;
        }

        return $tree;
    }

    public function getTreeForBreadcrumbs(string $alias): array
    {
        $tree = [];

        /** @var CatalogCategories $result */
        $result = $this->model::where('alias', $alias)->first();

        $tree[] = $result;

        /** @var CatalogCategories $parent */
        $parent = $this->findById($result->parent_id);

        if ($parent) {
            $tree[] = $parent;

            $subParent = $this->findById($parent->parent_id);

            if ($subParent) {
                $tree[] = $subParent;

                $child = $this->findById($subParent->parent_id);

                if ($child) {
                    $tree[] = $child;
                }
            }
        }

        return $tree;
    }

    public function findByAlias(string $alias)
    {
        return $this->model::where('alias', $alias)->first();
    }

    public function findById(int $id)
    {
        return $this->model::where('id', $id)->first();
    }

    public function getParents(string $alias)
    {
        $category = $this->findByAlias($alias);

        return $this->model::where('parent_id', $category->id)->get();
    }

    public function getMainCategories()
    {
        return $this->model::where('parent_id', 0)->where('status', Common::STATUS_ACTIVE)->get();
    }
}
