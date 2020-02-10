<?php

namespace App\Http\Controllers;

use App\Repositories\SupplierProduct\SupplierProductRepositoryInterface;
use Illuminate\Http\Request;

/**
 * Class ProductsController
 * @package App\Http\Controllers
 */
class ProductsController extends Controller
{
    /**
     * @var SupplierProductRepositoryInterface
     */
    private $supplierProducts;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(SupplierProductRepositoryInterface $supplierProducts)
    {
        $this->supplierProducts = $supplierProducts;
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $supplierProducts = $this->supplierProducts->supplierProductsWithCriteriaItems();
        foreach ($supplierProducts as $supplierProduct) {
            $totalScore = 0;
            foreach ($supplierProduct->criteriaItems as $item) {
                $totalScore = $totalScore + $item->item_value_percentage;
                $supplierProduct->total_score = $totalScore;
            }
        }

        $sortedSupplierProducts = $supplierProducts->sortByDesc('total_score');
        return view('products.index', ['data' => $sortedSupplierProducts]);
    }
}
