<?php
namespace App\Repositories\Criteria;

use App\Entity\Criteria;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class SupplierProductRepository
 * @package App\Repositories\SupplierProduct
 */
class CriteriaRepository implements CriteriaRepositoryInterface
{
    /**
     * Gets a supplier product by it's ID
     *
     * @param int
     * @return collection
     */
    public function get($criteriaId)
    {
        return Criteria::find($criteriaId);
    }

    /**
     * Gets all criterias.
     *
     * @return mixed
     */
    public function all():Collection
    {
        return Criteria::all();
    }

    /**
     * Gets sum of all criterias.
     *
     * @return mixed
     */
    public function getSum(): Float
    {
        return Criteria::sum('criteria_percentage');
    }
}
