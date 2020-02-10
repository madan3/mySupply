<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Entity\CriteriaItem;
use App\Entity\Criteria;

$factory->define(CriteriaItem::class, function (Faker $faker) {
    return [
        //
    ];
});

//Processor Speed
$factory->state(CriteriaItem::class, 'Quadcore 2,3 GHz', function() {
    $criteria = Criteria::select('*')->where('criteria_name', 'Processor Speed')->first();
    return
        [
            'item_name' => 'Quadcore 2,3 GHz',
            'criteria_id' => $criteria->id,
            'item_value_percentage' => 15
        ];
});

$factory->state(CriteriaItem::class, 'Quadcore 2,2 GHz', function() {
    $criteria = Criteria::select('*')->where('criteria_name', 'Processor Speed')->first();
    return
        [
            'item_name' => 'Quadcore 2,2 GHz',
            'criteria_id' => $criteria->id,
            'item_value_percentage' => 14
        ];
});

$factory->state(CriteriaItem::class, 'Quadcore 2,1 GHz', function() {
    $criteria = Criteria::select('*')->where('criteria_name', 'Processor Speed')->first();
    return
        [
            'item_name' => 'Quadcore 2,1 GHz',
            'criteria_id' => $criteria->id,
            'item_value_percentage' => 13
        ];
});

//Screen Resloution
$factory->state(CriteriaItem::class, 'Full HD', function() {
    $criteria = Criteria::select('*')->where('criteria_name', 'Screen Resolution')->first();
    return
        [
            'item_name' => 'Full HD',
            'criteria_id' => $criteria->id,
            'item_value_percentage' => 9
        ];
});

$factory->state(CriteriaItem::class, 'Ultra HD', function() {
    $criteria = Criteria::select('*')->where('criteria_name', 'Screen Resolution')->first();
    return
        [
            'item_name' => 'Ultra HD',
            'criteria_id' => $criteria->id,
            'item_value_percentage' => 10
        ];
});

//RAM Amount
$factory->state(CriteriaItem::class, '16 GB RAM', function() {
    $criteria = Criteria::select('*')->where('criteria_name', 'RAM Amount')->first();
    return
        [
            'item_name' => '16 GB RAM',
            'criteria_id' => $criteria->id,
            'item_value_percentage' => 10
        ];
});

$factory->state(CriteriaItem::class, '8 GB RAM', function() {
    $criteria = Criteria::select('*')->where('criteria_name', 'RAM Amount')->first();
    return
        [
            'item_name' => '8 GB RAM',
            'criteria_id' => $criteria->id,
            'item_value_percentage' => 9
        ];
});

//Energy Star Certificate
$factory->state(CriteriaItem::class, 'Energy Star 100 Certified', function() {
    $criteria = Criteria::select('*')->where('criteria_name', 'Energy Star Certificate')->first();
    return
        [
            'item_name' => 'Energy Star 100 Certified',
            'criteria_id' => $criteria->id,
            'item_value_percentage' => 5
        ];
});

$factory->state(CriteriaItem::class, 'Energy Star 80 Certified', function() {
    $criteria = Criteria::select('*')->where('criteria_name', 'Energy Star Certificate')->first();
    return
        [
            'item_name' => 'Energy Star 80 Certified',
            'criteria_id' => $criteria->id,
            'item_value_percentage' => 4
        ];
});

//Price
$factory->state(CriteriaItem::class, '2500 € per device', function() {
    $criteria = Criteria::select('*')->where('criteria_name', 'Price')->first();
    return
        [
            'item_name' => '2500 € per device',
            'criteria_id' => $criteria->id,
            'item_value_percentage' => 50
        ];
});

$factory->state(CriteriaItem::class, '2300 € per device', function() {
    $criteria = Criteria::select('*')->where('criteria_name', 'Price')->first();
    return
        [
            'item_name' => '2300 € per device',
            'criteria_id' => $criteria->id,
            'item_value_percentage' => 55
        ];
});

$factory->state(CriteriaItem::class, '2000 € per device', function() {
    $criteria = Criteria::select('*')->where('criteria_name', 'Price')->first();
    return
        [
            'item_name' => '2000 € per device',
            'criteria_id' => $criteria->id,
            'item_value_percentage' => 60
        ];
});
