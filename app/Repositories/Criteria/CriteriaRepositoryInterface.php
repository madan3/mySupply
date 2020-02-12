<?php
namespace App\Repositories\Criteria;

use Illuminate\Database\Eloquent\Collection;

/**
 * Interface SupplierProductRepositoryInterface
 * @package App\Repositories\Criteria
 */
interface CriteriaRepositoryInterface
{
    /**
     * Gets a criteria by it's ID
     *
     * @param int
     */
    public function get($criteriaId);

    /**
     * Gets all criterias.
     *
     * @return mixed
     */
    public function all(): Collection;

    /**
     * Gets sum of all criterias.
     *
     * @return mixed
     */
    public function getSum(): Float;
}
