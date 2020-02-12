<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Entity\User;
use App\Entity\SupplierProduct;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/
$factory->define(SupplierProduct::class, function (Faker $faker) {
   return [
       'user_id' => function () {
           return factory(User::class)->states('Dell Supplier')->create()->id;
       },
       'product_name' => 'Dell-i7',
       'price' => '2500',
   ];
});

$factory->state(SupplierProduct::class, 'Dell Product', [
    'user_id' => function () {
        return factory(User::class)->states('Dell Supplier')->create()->id;
    },
    'product_name' => 'Dell-i7',
    'price' => '2500',
]);

$factory->state(SupplierProduct::class, 'Lenova Product', [
    'user_id' => function () {
        return factory(User::class)->states('Lenova Supplier')->create()->id;
    },
    'product_name' => 'Lenovo-i5',
    'price' => '2300',
]);

$factory->state(SupplierProduct::class, 'Asus Product', [
    'user_id' => function () {
        return factory(User::class)->states('Asus Supplier')->create()->id;
    },
    'product_name' => 'Asus-i7',
    'price' => '2000',
]);

