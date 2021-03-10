<?php

use App\Food;
use App\Recipe;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class FoodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $foodDiet =  Food::create([
            'title' => 'Diet',
            'subtitle' => 'Marzipan cookie jelly brownie biscuit. Lemon drops',
            'cover' => Storage::url('food/diet.png'),
        ]);
        $j = 1;
        for ($i = 0; $i < 6; $i++) {
            $recipe = factory(Recipe::class)->make();
            $recipe->food_id = $foodDiet->id;
            $recipe->cover = Storage::url('food/greens/g' . $j . '.jpeg');
            $recipe->save();
            $j++;
        }

        $foodGreens =      Food::create([
            'title' => 'Greens',
            'subtitle' => 'Marzipan cookie jelly brownie biscuit. Lemon drops',
            'cover' =>  Storage::url('food/harvest.png'),
        ]);
        $k = 1;
        for ($i = 0; $i < 6; $i++) {
            $recipe = factory(Recipe::class)->make();
            $recipe->food_id = $foodGreens->id;
            $recipe->cover = Storage::url('food/greens/g' . $k . '.jpeg');
            $recipe->save();
            $k++;
        }

        $foodJuice =   Food::create([
            'title' => 'Juice',
            'subtitle' => 'Marzipan cookie jelly brownie biscuit. Lemon drops',
            'cover' =>  Storage::url('food/drink.png'),

        ]);
        $m = 1;
        for ($i = 0; $i < 6; $i++) {
            $recipe = factory(Recipe::class)->make();
            $recipe->food_id = $foodJuice->id;
            $recipe->cover = Storage::url('food/juice/j' . $m . '.jpeg');
            $recipe->save();
            $m++;
        }
        $foodFruits =   Food::create([
            'title' => 'Fruits',
            'subtitle' => 'Marzipan cookie jelly brownie biscuit. Lemon drops',
            'cover' =>  Storage::url('food/fruits.png'),
        ]);
        $n = 1;
        for ($i = 0; $i < 11; $i++) {
            $recipe = factory(Recipe::class)->make();
            $recipe->food_id = $foodFruits->id;
            $recipe->cover = Storage::url('food/fruits/f' . $n . '.jpeg');
            $recipe->save();
            $n++;
        }

        $foodExpecting =  Food::create([
            'title' => 'Expecting Mothers',
            'subtitle' => 'Marzipan cookie jelly brownie biscuit. Lemon drops',
            'cover' =>  Storage::url('food/maternity.png'),
        ]);
        $p = 1;
        for ($i = 0; $i < 6; $i++) {
            $recipe = factory(Recipe::class)->make();
            $recipe->food_id = $foodExpecting->id;
            $recipe->cover = Storage::url('food/pregnant/p' . $p . '.jpeg');
            $recipe->save();
            $p++;
        }

        $foodWeaning =  Food::create([
            'title' => 'Weaning',
            'subtitle' => 'Marzipan cookie jelly brownie biscuit. Lemon drops',
            'cover' =>  Storage::url('food/baby-food.png'),

        ]);
        $q = 1;
        for ($i = 0; $i < 6; $i++) {
            $recipe = factory(Recipe::class)->make();
            $recipe->food_id = $foodWeaning->id;
            $recipe->cover = Storage::url('food/pregnant/p' . $q . '.jpeg');
            $recipe->save();
            $q++;
        }
    }
}
