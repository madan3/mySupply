<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SupplierProduct
 * @package App\Entity
 *
 * @property int $id
 * @property string $product_name
 * @property string $created_at
 * @property string $updated_at
 *
 * @property CriteriaItem $criteriaItem
 */
class SupplierProduct extends Model
{
    /**
     * Attributes hidden
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function criteriaItems()
    {
        return $this->belongsToMany('App\Entity\CriteriaItem', 'supplier_product_criteria_item',
            'supplier_product_id', 'criteria_item_id');
    }
}
