<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entity\Criteria;
use Faker\Generator as Faker;

$factory->define(Criteria::class, function (Faker $faker) {
    return [
        //
    ];
});

$factory->state(Criteria::class, 'Processor Speed', function() {
    return
    [
        'criteria_name' => 'Processor Speed',
        'criteria_percentage' => 15
    ];
});

$factory->state(Criteria::class, 'Screen Resolution', function (){
    return [
        'criteria_name' => 'Screen Resolution',
        'criteria_percentage' => 10
    ];
});

$factory->state(Criteria::class, 'RAM Amount', function(){
    return [
        'criteria_name' => 'RAM Amount',
        'criteria_percentage' => 10
    ];
});

$factory->state(Criteria::class, 'Energy Star Certificate', function() {
    return [
        'criteria_name' => 'Energy Star Certificate',
        'criteria_percentage' => 5
    ];
});

$factory->state(Criteria::class, 'Price', function(){
    return [
        'criteria_name' => 'Price',
        'criteria_percentage' => 60
    ];
});
