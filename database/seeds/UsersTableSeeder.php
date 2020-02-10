<?php

use Illuminate\Database\Seeder;
use App\Entity\User;
use App\Entity\Criteria;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        if(App::environment('local')) {
            //Create Customer user type
            factory(User::class, 1)->states('Customer')->create()->each(function($user){
                $user->criterias()->attach(factory(Criteria::class, 1)->states('Processor Speed')->create());
                $user->criterias()->attach(factory(Criteria::class, 1)->states('Screen Resolution')->create());
                $user->criterias()->attach(factory(Criteria::class, 1)->states('RAM Amount')->create());
                $user->criterias()->attach(factory(Criteria::class, 1)->states('Energy Star Certificate')->create());
            });
        }
    }
}
