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
            //factory(\App\Entity\SupplierProduct::class, 1)->create();
            //factory(Criteria::class, 1)->states('Processor Speed')->create();
            //factory(Criteria::class, 1)->states('Screen Resolution')->create();
            //factory(Criteria::class, 1)->states('RAM Amount')->create();
            //factory(Criteria::class, 1)->states('Energy Star Certificate')->create();
            factory(Criteria::class, 1)->states('Price')->create();
        }
    }
}
