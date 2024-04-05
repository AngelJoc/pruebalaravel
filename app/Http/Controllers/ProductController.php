<?php

namespace App\Http\Controllers;

use App\Interfaces\ProductRepositoryInterface;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $repository;

    public function __construct(ProductRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function listAll()
    {
        return $this->repository->all(['*']);
    }
    public function create(Request $request)
    {
        return $this->repository->create($request->all());
    }
    public function update($id, Request $request)
    {
        return $this->repository->update($id, $request->all());
    }
    public function deleteLogic($id)
    {
        return $this->repository->update($id, ["active" => 0]);
    }
}
