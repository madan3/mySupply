<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entity\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => 'Test',
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->state(User::class, 'Customer', [
    'name' => 'Dev',
    'email' => 'madanadhikari1986@gmail.com',
    'user_type' => 'customer',
    'email_verified_at' => now(),
    'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
    'remember_token' => Str::random(10),
]);

$factory->state(User::class, 'Dell Supplier', [
    'name' => 'Dell Supplier',
    'email' => 'supplier@dell.com',
    'user_type' => 'supplier',
    'email_verified_at' => now(),
    'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
    'remember_token' => Str::random(10),
]);

$factory->state(User::class, 'Lenova Supplier', [
    'name' => 'Lenova Supplier',
    'email' => 'supplier@lenova.com',
    'user_type' => 'supplier',
    'email_verified_at' => now(),
    'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
    'remember_token' => Str::random(10),
]);

$factory->state(User::class, 'Asus Supplier', [
    'name' => 'Asus Supplier',
    'email' => 'supplier@asus.com',
    'user_type' => 'supplier',
    'email_verified_at' => now(),
    'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
    'remember_token' => Str::random(10),
]);
