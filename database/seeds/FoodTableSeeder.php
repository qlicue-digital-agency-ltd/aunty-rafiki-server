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
            'cover' => Storage::url('images/diet.jpg'),
        ]);

        for ($i = 0; $i < 6; $i++) {
            Recipe::create([
                'title' => 'Diet',
                'subtitle' => 'Marzipan cookie jelly brownie biscuit. Lemon drops',
                'ingredients' => '1. Macaroon cookie tiramisu wafer liquorice pudding.\n\n2. Carrot cake candy cookie.\n\n3. Chocolate bar jujubes jelly-o brownie gummi bears tiramisu sesame snaps oat cake.\n\n4. Tiramisu bear claw gingerbread cotton candy muffin.\n\n5. Oat cake chocolate cake danish bear claw sweet roll soufflé fruitcake jelly halvah. Tiramisu gingerbread sesame snaps sugar plum.\n\n6. Chupa chups candy brownie macaroon donut tiramisu.',
                'how_to_prepare' => 'Macaroon cookie tiramisu wafer liquorice pudding. Carrot cake candy cookie. Chocolate bar jujubes jelly-o brownie gummi bears tiramisu sesame snaps oat cake. Tiramisu bear claw gingerbread cotton candy muffin.\n\nLiquorice oat cake jelly bear claw candy chocolate bar oat cake chocolate cake cotton candy. Oat cake chocolate cake danish bear claw sweet roll soufflé fruitcake jelly halvah. Tiramisu gingerbread sesame snaps sugar plum. Chupa chups candy brownie macaroon donut tiramisu.',
                'alternative_food' => 'Macaroon cookie tiramisu wafer liquorice pudding. Carrot cake candy cookie. Chocolate bar jujubes jelly-o brownie gummi bears tiramisu sesame snaps oat cake. Tiramisu bear claw gingerbread cotton candy muffin.\n\nLiquorice oat cake jelly bear claw candy chocolate bar oat cake chocolate cake cotton candy. Oat cake chocolate cake danish bear claw sweet roll soufflé fruitcake jelly halvah. Tiramisu gingerbread sesame snaps sugar plum. Chupa chups candy brownie macaroon donut tiramisu.',
                'food_id' => $foodDiet->id,
                'cover' => Storage::url('images/diet.jpg'),

            ]);
        }

        $foodGreens =      Food::create([
            'title' => 'Greens',
            'subtitle' => 'Marzipan cookie jelly brownie biscuit. Lemon drops',
            'cover' =>  Storage::url('images/greens.jpg'),
        ]);

        for ($i = 0; $i < 6; $i++) {
            Recipe::create([
                'title' => 'Greens',
                'subtitle' => 'Marzipan cookie jelly brownie biscuit. Lemon drops',
                'ingredients' => '1. Macaroon cookie tiramisu wafer liquorice pudding.\n\n2. Carrot cake candy cookie.\n\n3. Chocolate bar jujubes jelly-o brownie gummi bears tiramisu sesame snaps oat cake.\n\n4. Tiramisu bear claw gingerbread cotton candy muffin.\n\n5. Oat cake chocolate cake danish bear claw sweet roll soufflé fruitcake jelly halvah. Tiramisu gingerbread sesame snaps sugar plum.\n\n6. Chupa chups candy brownie macaroon donut tiramisu.',
                'how_to_prepare' => 'Macaroon cookie tiramisu wafer liquorice pudding. Carrot cake candy cookie. Chocolate bar jujubes jelly-o brownie gummi bears tiramisu sesame snaps oat cake. Tiramisu bear claw gingerbread cotton candy muffin.\n\nLiquorice oat cake jelly bear claw candy chocolate bar oat cake chocolate cake cotton candy. Oat cake chocolate cake danish bear claw sweet roll soufflé fruitcake jelly halvah. Tiramisu gingerbread sesame snaps sugar plum. Chupa chups candy brownie macaroon donut tiramisu.',
                'alternative_food' => 'Macaroon cookie tiramisu wafer liquorice pudding. Carrot cake candy cookie. Chocolate bar jujubes jelly-o brownie gummi bears tiramisu sesame snaps oat cake. Tiramisu bear claw gingerbread cotton candy muffin.\n\nLiquorice oat cake jelly bear claw candy chocolate bar oat cake chocolate cake cotton candy. Oat cake chocolate cake danish bear claw sweet roll soufflé fruitcake jelly halvah. Tiramisu gingerbread sesame snaps sugar plum. Chupa chups candy brownie macaroon donut tiramisu.',
                'food_id' => $foodGreens->id,
                'cover' =>  Storage::url('images/greens.jpg'),

            ]);
        }

        $foodJuice =   Food::create([
            'title' => 'Juice',
            'subtitle' => 'Marzipan cookie jelly brownie biscuit. Lemon drops',
            'cover' =>  Storage::url('images/juice.jpg'),

        ]);
        for ($i = 0; $i < 6; $i++) {
            Recipe::create([
                'title' => 'Juice',
                'subtitle' => 'Marzipan cookie jelly brownie biscuit. Lemon drops',
                'ingredients' => '1. Macaroon cookie tiramisu wafer liquorice pudding.\n\n2. Carrot cake candy cookie.\n\n3. Chocolate bar jujubes jelly-o brownie gummi bears tiramisu sesame snaps oat cake.\n\n4. Tiramisu bear claw gingerbread cotton candy muffin.\n\n5. Oat cake chocolate cake danish bear claw sweet roll soufflé fruitcake jelly halvah. Tiramisu gingerbread sesame snaps sugar plum.\n\n6. Chupa chups candy brownie macaroon donut tiramisu.',
                'how_to_prepare' => 'Macaroon cookie tiramisu wafer liquorice pudding. Carrot cake candy cookie. Chocolate bar jujubes jelly-o brownie gummi bears tiramisu sesame snaps oat cake. Tiramisu bear claw gingerbread cotton candy muffin.\n\nLiquorice oat cake jelly bear claw candy chocolate bar oat cake chocolate cake cotton candy. Oat cake chocolate cake danish bear claw sweet roll soufflé fruitcake jelly halvah. Tiramisu gingerbread sesame snaps sugar plum. Chupa chups candy brownie macaroon donut tiramisu.',
                'alternative_food' => 'Macaroon cookie tiramisu wafer liquorice pudding. Carrot cake candy cookie. Chocolate bar jujubes jelly-o brownie gummi bears tiramisu sesame snaps oat cake. Tiramisu bear claw gingerbread cotton candy muffin.\n\nLiquorice oat cake jelly bear claw candy chocolate bar oat cake chocolate cake cotton candy. Oat cake chocolate cake danish bear claw sweet roll soufflé fruitcake jelly halvah. Tiramisu gingerbread sesame snaps sugar plum. Chupa chups candy brownie macaroon donut tiramisu.',
                'food_id' => $foodJuice->id,
                'cover' =>  Storage::url('images/juice.jpg'),

            ]);
        }
        $foodFruits =   Food::create([
            'title' => 'Fruits',
            'subtitle' => 'Marzipan cookie jelly brownie biscuit. Lemon drops',
            'cover' =>  Storage::url('images/fruits.jpg'),
        ]);
        for ($i = 0; $i < 6; $i++) {
            Recipe::create([
                'title' => 'Fruits',
                'subtitle' => 'Marzipan cookie jelly brownie biscuit. Lemon drops',
                'ingredients' => '1. Macaroon cookie tiramisu wafer liquorice pudding.\n\n2. Carrot cake candy cookie.\n\n3. Chocolate bar jujubes jelly-o brownie gummi bears tiramisu sesame snaps oat cake.\n\n4. Tiramisu bear claw gingerbread cotton candy muffin.\n\n5. Oat cake chocolate cake danish bear claw sweet roll soufflé fruitcake jelly halvah. Tiramisu gingerbread sesame snaps sugar plum.\n\n6. Chupa chups candy brownie macaroon donut tiramisu.',
                'how_to_prepare' => 'Macaroon cookie tiramisu wafer liquorice pudding. Carrot cake candy cookie. Chocolate bar jujubes jelly-o brownie gummi bears tiramisu sesame snaps oat cake. Tiramisu bear claw gingerbread cotton candy muffin.\n\nLiquorice oat cake jelly bear claw candy chocolate bar oat cake chocolate cake cotton candy. Oat cake chocolate cake danish bear claw sweet roll soufflé fruitcake jelly halvah. Tiramisu gingerbread sesame snaps sugar plum. Chupa chups candy brownie macaroon donut tiramisu.',
                'alternative_food' => 'Macaroon cookie tiramisu wafer liquorice pudding. Carrot cake candy cookie. Chocolate bar jujubes jelly-o brownie gummi bears tiramisu sesame snaps oat cake. Tiramisu bear claw gingerbread cotton candy muffin.\n\nLiquorice oat cake jelly bear claw candy chocolate bar oat cake chocolate cake cotton candy. Oat cake chocolate cake danish bear claw sweet roll soufflé fruitcake jelly halvah. Tiramisu gingerbread sesame snaps sugar plum. Chupa chups candy brownie macaroon donut tiramisu.',
                'food_id' => $foodFruits->id,
                'cover' =>  Storage::url('images/fruits.jpg'),

            ]);
        }

        $foodExpecting =  Food::create([
            'title' => 'Expecting Mothers',
            'subtitle' => 'Marzipan cookie jelly brownie biscuit. Lemon drops',
            'cover' =>  Storage::url('images/expecting.jpg'),
        ]);
        for ($i = 0; $i < 6; $i++) {
            Recipe::create([
                'title' => 'Expecting Mothers',
                'subtitle' => 'Marzipan cookie jelly brownie biscuit. Lemon drops',
                'ingredients' => '1. Macaroon cookie tiramisu wafer liquorice pudding.\n\n2. Carrot cake candy cookie.\n\n3. Chocolate bar jujubes jelly-o brownie gummi bears tiramisu sesame snaps oat cake.\n\n4. Tiramisu bear claw gingerbread cotton candy muffin.\n\n5. Oat cake chocolate cake danish bear claw sweet roll soufflé fruitcake jelly halvah. Tiramisu gingerbread sesame snaps sugar plum.\n\n6. Chupa chups candy brownie macaroon donut tiramisu.',
                'how_to_prepare' => 'Macaroon cookie tiramisu wafer liquorice pudding. Carrot cake candy cookie. Chocolate bar jujubes jelly-o brownie gummi bears tiramisu sesame snaps oat cake. Tiramisu bear claw gingerbread cotton candy muffin.\n\nLiquorice oat cake jelly bear claw candy chocolate bar oat cake chocolate cake cotton candy. Oat cake chocolate cake danish bear claw sweet roll soufflé fruitcake jelly halvah. Tiramisu gingerbread sesame snaps sugar plum. Chupa chups candy brownie macaroon donut tiramisu.',
                'alternative_food' => 'Macaroon cookie tiramisu wafer liquorice pudding. Carrot cake candy cookie. Chocolate bar jujubes jelly-o brownie gummi bears tiramisu sesame snaps oat cake. Tiramisu bear claw gingerbread cotton candy muffin.\n\nLiquorice oat cake jelly bear claw candy chocolate bar oat cake chocolate cake cotton candy. Oat cake chocolate cake danish bear claw sweet roll soufflé fruitcake jelly halvah. Tiramisu gingerbread sesame snaps sugar plum. Chupa chups candy brownie macaroon donut tiramisu.',
                'food_id' => $foodExpecting->id,
                'cover' =>  Storage::url('images/expecting.jpg'),

            ]);
        }

        $foodWeaning =  Food::create([
            'title' => 'Weaning',
            'subtitle' => 'Marzipan cookie jelly brownie biscuit. Lemon drops',
            'cover' =>  Storage::url('images/weaning.jpg'),

        ]);

        for ($i = 0; $i < 6; $i++) {
            Recipe::create([
                'title' => 'Weaning',
                'subtitle' => 'Marzipan cookie jelly brownie biscuit. Lemon drops',
                'ingredients' => '1. Macaroon cookie tiramisu wafer liquorice pudding.\n\n2. Carrot cake candy cookie.\n\n3. Chocolate bar jujubes jelly-o brownie gummi bears tiramisu sesame snaps oat cake.\n\n4. Tiramisu bear claw gingerbread cotton candy muffin.\n\n5. Oat cake chocolate cake danish bear claw sweet roll soufflé fruitcake jelly halvah. Tiramisu gingerbread sesame snaps sugar plum.\n\n6. Chupa chups candy brownie macaroon donut tiramisu.',
                'how_to_prepare' => 'Macaroon cookie tiramisu wafer liquorice pudding. Carrot cake candy cookie. Chocolate bar jujubes jelly-o brownie gummi bears tiramisu sesame snaps oat cake. Tiramisu bear claw gingerbread cotton candy muffin.\n\nLiquorice oat cake jelly bear claw candy chocolate bar oat cake chocolate cake cotton candy. Oat cake chocolate cake danish bear claw sweet roll soufflé fruitcake jelly halvah. Tiramisu gingerbread sesame snaps sugar plum. Chupa chups candy brownie macaroon donut tiramisu.',
                'alternative_food' => 'Macaroon cookie tiramisu wafer liquorice pudding. Carrot cake candy cookie. Chocolate bar jujubes jelly-o brownie gummi bears tiramisu sesame snaps oat cake. Tiramisu bear claw gingerbread cotton candy muffin.\n\nLiquorice oat cake jelly bear claw candy chocolate bar oat cake chocolate cake cotton candy. Oat cake chocolate cake danish bear claw sweet roll soufflé fruitcake jelly halvah. Tiramisu gingerbread sesame snaps sugar plum. Chupa chups candy brownie macaroon donut tiramisu.',
                'food_id' => $foodWeaning->id,
                'cover' =>  Storage::url('images/weaning.jpg'),

            ]);
        }
    }
}
