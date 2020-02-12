<?php

use Illuminate\Database\Seeder;
use App\Entity\Criteria;

class CrietariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(\App::environment('local')) {
            // factory(Criteria::class, 1)->states('Price')->create();
        }
    }
}
