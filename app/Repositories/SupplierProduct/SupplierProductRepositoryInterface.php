<?php
namespace App\Repositories\SupplierProduct;

use Illuminate\Database\Eloquent\Collection;

/**
 * Interface SupplierProductRepositoryInterface
 * @package App\Repositories\SupplierProduct
 */
interface SupplierProductRepositoryInterface
{
    /**
     * Gets a supplier product by it's ID
     *
     * @param int
     */
    public function get($supplierProductId);

    /**
     * Gets all supplier products.
     *
     * @return mixed
     */
    public function all(): Collection;

    /**
     * Gets all supplier products with criteria items.
     *
     * @return mixed
     */
    public function supplierProductsWithCriteriaItems(): Collection;
}
