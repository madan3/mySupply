<?php
namespace App\Repositories\SupplierProduct;

use App\Entity\SupplierProduct;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class SupplierProductRepository
 * @package App\Repositories\SupplierProduct
 */
class SupplierProductRepository implements SupplierProductRepositoryInterface
{
    /**
     * Gets a supplier product by it's ID
     *
     * @param int
     * @return collection
     */
    public function get($supplierProductId)
    {
        return SupplierProduct::find($supplierProductId);
    }

    /**
     * Gets all supplier products.
     *
     * @return mixed
     */
    public function all():Collection
    {
        return SupplierProduct::all();
    }

    /**
     * Gets all supplier products with criteria items.
     *
     * @return mixed
     */
    public function supplierProductsWithCriteriaItems():Collection
    {
        return SupplierProduct::with("criteriaItems")->get();
    }
}
