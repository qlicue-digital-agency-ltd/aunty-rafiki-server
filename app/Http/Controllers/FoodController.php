<?php

namespace App\Http\Controllers;

use App\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;

class FoodController extends Controller
{
    public function getFoods()
    {
        $foods = Food::all();
        foreach ($foods as $food) {

            $food->cover = URL::to('/') . $food->cover;
            $food->recipes;
        }

        return response()->json(['foods' =>  $foods], 200, [], JSON_NUMERIC_CHECK);
    }


    public function getFood($foodId)
    {
        $food = Food::find($foodId);

        if (!$food) return response()->json(['error' => 'Food Not Found'], 404);
        $food->recipes;
        return response()->json(['food' => $food], 200);
    }

    public function postFood(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'subtitle' => 'required',
        ]);


        if ($validator->fails()) {

            return response()->json(['errors' => $validator->errors()]);
        }

        $food = new   Food();

        $food->title = $request->title;
        $food->subtitle = $request->subtitle;
        $food->cover = 'cover.png';


        $food->save();

        return response()->json(['food' => $food], 201, [], JSON_NUMERIC_CHECK);
    }

    public function putFood(Request $request, $foodId)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'subtitle' => 'required',
        ]);

        if ($validator->fails()) {

            return response()->json(['errors' => $validator->errors()]);
        }

        $food = Food::find($foodId);

        if (!$food) return response()->json(['error' => 'Food Not Found'], 404);


        $food->update([
            'title' =>  $request->title,
            'subtitle' =>  $request->subtitle,
        ]);

        return response()->json(['food' => $food], 201);
    }

    public function deleteFood($foodId)
    {
        $food = Food::find($foodId);

        if (!$food) return response()->json(['error' => 'Food Not Found'], 404);
        $food->delete();

        return response()->json(['food' => 'Food deleted successfully'], 201);
    }
}
