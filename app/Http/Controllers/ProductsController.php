<?php

namespace App\Http\Controllers;

use App\Repositories\SupplierProduct\SupplierProductRepositoryInterface;
use App\Repositories\Criteria\CriteriaRepositoryInterface;
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
     * @var CriteriaRepositoryInterface
     */
    private $criterias;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        SupplierProductRepositoryInterface $supplierProducts, 
        CriteriaRepositoryInterface $criterias
    )
    {
        $this->supplierProducts = $supplierProducts;
        $this->criterias = $criterias;
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $priceTotalPercentage = 100 - $this->criterias->getSum();
        $minPrice = $this->supplierProducts->minProductPrice();

        $supplierProducts = $this->supplierProducts->supplierProductsWithCriteriaItems();
        
        foreach ($supplierProducts as $supplierProduct) {
            $totalScore = $this->calculatePricePercentageValue($priceTotalPercentage, $minPrice, $supplierProduct->price);
            $supplierProduct->price_score = $totalScore;
            foreach ($supplierProduct->criteriaItems as $item) {
                $totalScore = $totalScore + $item->item_value_percentage;
                $supplierProduct->total_score = $totalScore;
            }
        }

        $sortedSupplierProducts = $supplierProducts->sortByDesc('total_score');
        return view('products.index', ['data' => $sortedSupplierProducts]);
    }

    /**
     * get price criteria percentage value
     *
     * @return Float
     */
    private function calculatePricePercentageValue($priceTotalPercentage, $minPrice, $supplierProductPrice)
    {
        if ($minPrice == $supplierProductPrice) {
            return $priceTotalPercentage;
        } 
        $percentageValueTobeCalculated = $supplierProductPrice - $minPrice;
        $fullPercentPrice = ($minPrice * 100)/ $priceTotalPercentage;
        $percentageToBeDeducted =  ($percentageValueTobeCalculated/$fullPercentPrice)*100;
        return ($priceTotalPercentage - $percentageToBeDeducted);
    }
}
