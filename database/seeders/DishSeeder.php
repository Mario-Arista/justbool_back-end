<?php

namespace Database\Seeders;

use App\Models\Dish;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $dishes = config("dishes");

        foreach ($dishes as $dish) {

            $newDish = new Dish;
            $newDish->restaurant_id = $dish['restaurant_id'];
            $newDish->dish_name = $dish['dish_name'];
            $newDish->ingridients = $dish['ingridients'];
            $newDish->dish_price = $dish['dish_price'];
            $newDish->visibiity = $dish['visibiity'];
            $newDish->dish_image = $dish['dish_image'];
            $newDish->save();
        }
    }
}
