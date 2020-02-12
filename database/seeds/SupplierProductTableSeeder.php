<?php

use Illuminate\Database\Seeder;
use App\Entity\SupplierProduct;
use App\Entity\CriteriaItem;

class SupplierProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run():void
    {
        if(\App::environment('local')) {
            factory(SupplierProduct::class, 1)->states('Dell Product')->create()->each(function($product){
                //Product features
                $product->criteriaItems()->attach(factory(CriteriaItem::class, 1)->states('Quadcore 2,3 GHz')->create());
                $product->criteriaItems()->attach(factory(CriteriaItem::class, 1)->states('Full HD')->create());
                $product->criteriaItems()->attach(factory(CriteriaItem::class, 1)->states('16 GB RAM')->create());
                $product->criteriaItems()->attach(factory(CriteriaItem::class, 1)->states('Energy Star 100 Certified')->create());

            });
            factory(SupplierProduct::class, 1)->states('Lenova Product')->create()->each(function($product){
                //Product features
                $product->criteriaItems()->attach(factory(CriteriaItem::class, 1)->states('Quadcore 2,2 GHz')->create());
                $product->criteriaItems()->attach(factory(CriteriaItem::class, 1)->states('Full HD')->create());
                $product->criteriaItems()->attach(factory(CriteriaItem::class, 1)->states('8 GB RAM')->create());
                $product->criteriaItems()->attach(factory(CriteriaItem::class, 1)->states('Energy Star 100 Certified')->create());
            });
            factory(SupplierProduct::class, 1)->states('Asus Product')->create()->each(function($product){
                //Product features
                $product->criteriaItems()->attach(factory(CriteriaItem::class, 1)->states('Quadcore 2,1 GHz')->create());
                $product->criteriaItems()->attach(factory(CriteriaItem::class, 1)->states('Ultra HD')->create());
                $product->criteriaItems()->attach(factory(CriteriaItem::class, 1)->states('8 GB RAM')->create());
                $product->criteriaItems()->attach(factory(CriteriaItem::class, 1)->states('Energy Star 80 Certified')->create());
            });
        }
    }
}
