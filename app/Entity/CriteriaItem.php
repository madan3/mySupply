<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CriteriaItem
 * @package App\Entity
 *
 * @property int $id
 * @property string $item_name
 * @property int $criteria_id
 * @property double $item_value_percentage
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Criteria $criteria
 *
 * @property SupplierProduct $supplierProducts
 */
class CriteriaItem extends Model
{

    /**
     * Attributes hidden from array
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function criteria():object
    {
        return $this->belongsTo('App\Entity\Criteria');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function supplierProducts():object
    {
        return $this->belongsTo('App\Entity\SupplierProduct');
    }
}
