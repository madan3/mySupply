<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Criteria
 * @package App\Entity
 *
 * @property int $id
 * @property string $criteria_name
 * @property double criteria_percentage
 * @property string $created_at
 * @property string $updated_at
 *
 *
 *
 */
class Criteria extends Model
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users():object
    {
        return $this->belongsToMany('App\Users', 'user_criteria');
    }

    /**
     * @return mixed
     */
    public function criteriaItems()
    {
        return $this->has('App\Entity\CriteriaItem');
    }
}
