<?php
namespace App\Repositories;
use App\Models\Product;
use App\Interfaces\ProductRepositoryInterface;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface{
    protected $model;

    public function __construct(Product $model)
    {
        $this->model = $model;
    }
}