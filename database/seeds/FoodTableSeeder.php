<?php

use App\Food;
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
        Food::create([
            'title' => 'Diet',
            'subtitle' => 'Marzipan cookie jelly brownie biscuit. Lemon drops',
            'ingredients' => '1. Macaroon cookie tiramisu wafer liquorice pudding.\n\n2. Carrot cake candy cookie.\n\n3. Chocolate bar jujubes jelly-o brownie gummi bears tiramisu sesame snaps oat cake.\n\n4. Tiramisu bear claw gingerbread cotton candy muffin.\n\n5. Oat cake chocolate cake danish bear claw sweet roll soufflé fruitcake jelly halvah. Tiramisu gingerbread sesame snaps sugar plum.\n\n6. Chupa chups candy brownie macaroon donut tiramisu.',
            'how_to_prepare' => 'Macaroon cookie tiramisu wafer liquorice pudding. Carrot cake candy cookie. Chocolate bar jujubes jelly-o brownie gummi bears tiramisu sesame snaps oat cake. Tiramisu bear claw gingerbread cotton candy muffin.\n\nLiquorice oat cake jelly bear claw candy chocolate bar oat cake chocolate cake cotton candy. Oat cake chocolate cake danish bear claw sweet roll soufflé fruitcake jelly halvah. Tiramisu gingerbread sesame snaps sugar plum. Chupa chups candy brownie macaroon donut tiramisu.',
            'alternative_food' => 'Macaroon cookie tiramisu wafer liquorice pudding. Carrot cake candy cookie. Chocolate bar jujubes jelly-o brownie gummi bears tiramisu sesame snaps oat cake. Tiramisu bear claw gingerbread cotton candy muffin.\n\nLiquorice oat cake jelly bear claw candy chocolate bar oat cake chocolate cake cotton candy. Oat cake chocolate cake danish bear claw sweet roll soufflé fruitcake jelly halvah. Tiramisu gingerbread sesame snaps sugar plum. Chupa chups candy brownie macaroon donut tiramisu.',
            'cover' => Storage::url('images/diet.jpg'),

        ]);

        Food::create([
            'title' => 'Greens',
            'subtitle' => 'Marzipan cookie jelly brownie biscuit. Lemon drops',
            'ingredients' => '1. Macaroon cookie tiramisu wafer liquorice pudding.\n\n2. Carrot cake candy cookie.\n\n3. Chocolate bar jujubes jelly-o brownie gummi bears tiramisu sesame snaps oat cake.\n\n4. Tiramisu bear claw gingerbread cotton candy muffin.\n\n5. Oat cake chocolate cake danish bear claw sweet roll soufflé fruitcake jelly halvah. Tiramisu gingerbread sesame snaps sugar plum.\n\n6. Chupa chups candy brownie macaroon donut tiramisu.',
            'how_to_prepare' => 'Macaroon cookie tiramisu wafer liquorice pudding. Carrot cake candy cookie. Chocolate bar jujubes jelly-o brownie gummi bears tiramisu sesame snaps oat cake. Tiramisu bear claw gingerbread cotton candy muffin.\n\nLiquorice oat cake jelly bear claw candy chocolate bar oat cake chocolate cake cotton candy. Oat cake chocolate cake danish bear claw sweet roll soufflé fruitcake jelly halvah. Tiramisu gingerbread sesame snaps sugar plum. Chupa chups candy brownie macaroon donut tiramisu.',
            'alternative_food' => 'Macaroon cookie tiramisu wafer liquorice pudding. Carrot cake candy cookie. Chocolate bar jujubes jelly-o brownie gummi bears tiramisu sesame snaps oat cake. Tiramisu bear claw gingerbread cotton candy muffin.\n\nLiquorice oat cake jelly bear claw candy chocolate bar oat cake chocolate cake cotton candy. Oat cake chocolate cake danish bear claw sweet roll soufflé fruitcake jelly halvah. Tiramisu gingerbread sesame snaps sugar plum. Chupa chups candy brownie macaroon donut tiramisu.',
            'cover' =>  Storage::url('images/greens.jpg'),

        ]);

        Food::create([
            'title' => 'Juice',
            'subtitle' => 'Marzipan cookie jelly brownie biscuit. Lemon drops',
            'ingredients' => '1. Macaroon cookie tiramisu wafer liquorice pudding.\n\n2. Carrot cake candy cookie.\n\n3. Chocolate bar jujubes jelly-o brownie gummi bears tiramisu sesame snaps oat cake.\n\n4. Tiramisu bear claw gingerbread cotton candy muffin.\n\n5. Oat cake chocolate cake danish bear claw sweet roll soufflé fruitcake jelly halvah. Tiramisu gingerbread sesame snaps sugar plum.\n\n6. Chupa chups candy brownie macaroon donut tiramisu.',
            'how_to_prepare' => 'Macaroon cookie tiramisu wafer liquorice pudding. Carrot cake candy cookie. Chocolate bar jujubes jelly-o brownie gummi bears tiramisu sesame snaps oat cake. Tiramisu bear claw gingerbread cotton candy muffin.\n\nLiquorice oat cake jelly bear claw candy chocolate bar oat cake chocolate cake cotton candy. Oat cake chocolate cake danish bear claw sweet roll soufflé fruitcake jelly halvah. Tiramisu gingerbread sesame snaps sugar plum. Chupa chups candy brownie macaroon donut tiramisu.',
            'alternative_food' => 'Macaroon cookie tiramisu wafer liquorice pudding. Carrot cake candy cookie. Chocolate bar jujubes jelly-o brownie gummi bears tiramisu sesame snaps oat cake. Tiramisu bear claw gingerbread cotton candy muffin.\n\nLiquorice oat cake jelly bear claw candy chocolate bar oat cake chocolate cake cotton candy. Oat cake chocolate cake danish bear claw sweet roll soufflé fruitcake jelly halvah. Tiramisu gingerbread sesame snaps sugar plum. Chupa chups candy brownie macaroon donut tiramisu.',
            'cover' =>  Storage::url('images/juice.jpg'),

        ]);
        Food::create([
            'title' => 'Fruits',
            'subtitle' => 'Marzipan cookie jelly brownie biscuit. Lemon drops',
            'ingredients' => '1. Macaroon cookie tiramisu wafer liquorice pudding.\n\n2. Carrot cake candy cookie.\n\n3. Chocolate bar jujubes jelly-o brownie gummi bears tiramisu sesame snaps oat cake.\n\n4. Tiramisu bear claw gingerbread cotton candy muffin.\n\n5. Oat cake chocolate cake danish bear claw sweet roll soufflé fruitcake jelly halvah. Tiramisu gingerbread sesame snaps sugar plum.\n\n6. Chupa chups candy brownie macaroon donut tiramisu.',
            'how_to_prepare' => 'Macaroon cookie tiramisu wafer liquorice pudding. Carrot cake candy cookie. Chocolate bar jujubes jelly-o brownie gummi bears tiramisu sesame snaps oat cake. Tiramisu bear claw gingerbread cotton candy muffin.\n\nLiquorice oat cake jelly bear claw candy chocolate bar oat cake chocolate cake cotton candy. Oat cake chocolate cake danish bear claw sweet roll soufflé fruitcake jelly halvah. Tiramisu gingerbread sesame snaps sugar plum. Chupa chups candy brownie macaroon donut tiramisu.',
            'alternative_food' => 'Macaroon cookie tiramisu wafer liquorice pudding. Carrot cake candy cookie. Chocolate bar jujubes jelly-o brownie gummi bears tiramisu sesame snaps oat cake. Tiramisu bear claw gingerbread cotton candy muffin.\n\nLiquorice oat cake jelly bear claw candy chocolate bar oat cake chocolate cake cotton candy. Oat cake chocolate cake danish bear claw sweet roll soufflé fruitcake jelly halvah. Tiramisu gingerbread sesame snaps sugar plum. Chupa chups candy brownie macaroon donut tiramisu.',
            'cover' =>  Storage::url('images/fruits.jpg'),

        ]);
        Food::create([
            'title' => 'Expecting Mothers',
            'subtitle' => '',
            'ingredients' => '1. Macaroon cookie tiramisu wafer liquorice pudding.\n\n2. Carrot cake candy cookie.\n\n3. Chocolate bar jujubes jelly-o brownie gummi bears tiramisu sesame snaps oat cake.\n\n4. Tiramisu bear claw gingerbread cotton candy muffin.\n\n5. Oat cake chocolate cake danish bear claw sweet roll soufflé fruitcake jelly halvah. Tiramisu gingerbread sesame snaps sugar plum.\n\n6. Chupa chups candy brownie macaroon donut tiramisu.',
            'how_to_prepare' => 'Macaroon cookie tiramisu wafer liquorice pudding. Carrot cake candy cookie. Chocolate bar jujubes jelly-o brownie gummi bears tiramisu sesame snaps oat cake. Tiramisu bear claw gingerbread cotton candy muffin.\n\nLiquorice oat cake jelly bear claw candy chocolate bar oat cake chocolate cake cotton candy. Oat cake chocolate cake danish bear claw sweet roll soufflé fruitcake jelly halvah. Tiramisu gingerbread sesame snaps sugar plum. Chupa chups candy brownie macaroon donut tiramisu.',
            'alternative_food' => 'Macaroon cookie tiramisu wafer liquorice pudding. Carrot cake candy cookie. Chocolate bar jujubes jelly-o brownie gummi bears tiramisu sesame snaps oat cake. Tiramisu bear claw gingerbread cotton candy muffin.\n\nLiquorice oat cake jelly bear claw candy chocolate bar oat cake chocolate cake cotton candy. Oat cake chocolate cake danish bear claw sweet roll soufflé fruitcake jelly halvah. Tiramisu gingerbread sesame snaps sugar plum. Chupa chups candy brownie macaroon donut tiramisu.',
            'cover' =>  Storage::url('images/expecting.jpg'),

        ]);
        Food::create([
            'title' => 'Weaning',
            'subtitle' => 'Marzipan cookie jelly brownie biscuit. Lemon drops',
            'ingredients' => '1. Macaroon cookie tiramisu wafer liquorice pudding.\n\n2. Carrot cake candy cookie.\n\n3. Chocolate bar jujubes jelly-o brownie gummi bears tiramisu sesame snaps oat cake.\n\n4. Tiramisu bear claw gingerbread cotton candy muffin.\n\n5. Oat cake chocolate cake danish bear claw sweet roll soufflé fruitcake jelly halvah. Tiramisu gingerbread sesame snaps sugar plum.\n\n6. Chupa chups candy brownie macaroon donut tiramisu.',
            'how_to_prepare' => 'Macaroon cookie tiramisu wafer liquorice pudding. Carrot cake candy cookie. Chocolate bar jujubes jelly-o brownie gummi bears tiramisu sesame snaps oat cake. Tiramisu bear claw gingerbread cotton candy muffin.\n\nLiquorice oat cake jelly bear claw candy chocolate bar oat cake chocolate cake cotton candy. Oat cake chocolate cake danish bear claw sweet roll soufflé fruitcake jelly halvah. Tiramisu gingerbread sesame snaps sugar plum. Chupa chups candy brownie macaroon donut tiramisu.',
            'alternative_food' => 'Macaroon cookie tiramisu wafer liquorice pudding. Carrot cake candy cookie. Chocolate bar jujubes jelly-o brownie gummi bears tiramisu sesame snaps oat cake. Tiramisu bear claw gingerbread cotton candy muffin.\n\nLiquorice oat cake jelly bear claw candy chocolate bar oat cake chocolate cake cotton candy. Oat cake chocolate cake danish bear claw sweet roll soufflé fruitcake jelly halvah. Tiramisu gingerbread sesame snaps sugar plum. Chupa chups candy brownie macaroon donut tiramisu.',
            'cover' =>  Storage::url('images/weaning.jpg'),

        ]);
    }
}
