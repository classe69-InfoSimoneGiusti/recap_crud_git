<?php

use App\Pizza;
use Illuminate\Database\Seeder;

class PizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('it_IT');
        
        for ($i = 0; $i<20; $i++) {
            $newPizza = new Pizza();
            $newPizza->name = $faker->word();
            $newPizza->price = $faker->randomFloat(2, 4, 30);
            $newPizza->size = $faker->randomElement(['normale', 'familiare', 'baby']);
            $newPizza->url = $faker->url();
            $newPizza->description = $faker->paragraph();
            $newPizza->save();
        }
    }
}
