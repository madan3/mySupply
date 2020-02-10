<?php

use Illuminate\Database\Seeder;
use App\Entity\CriteriaItem;

class CriteriaItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(\App::environment('local')) {
            //Processor Speed
            factory(CriteriaItem::class, 1)->states('Quadcore 2,3 GHz')->create();
            factory(CriteriaItem::class, 1)->states('Quadcore 2,2 GHz')->create();
            factory(CriteriaItem::class, 1)->states('Quadcore 2,1 GHz')->create();
            //Screen Resolution
            factory(CriteriaItem::class, 1)->states('Full HD')->create();
            factory(CriteriaItem::class, 1)->states('Ultra HD')->create();
            //RAM Amount
            factory(CriteriaItem::class, 1)->states('16 GB RAM')->create();
            factory(CriteriaItem::class, 1)->states('8 GB RAM')->create();
            //Energy Star Certificate
            factory(CriteriaItem::class, 1)->states('Energy Star 100 Certified')->create();
            factory(CriteriaItem::class, 1)->states('Energy Star 80 Certified')->create();
            //Price
            factory(CriteriaItem::class, 1)->states('2500 € per device')->create();
            factory(CriteriaItem::class, 1)->states('2300 € per device')->create();
            factory(CriteriaItem::class, 1)->states('2000 € per device')->create();
        }
    }
}
