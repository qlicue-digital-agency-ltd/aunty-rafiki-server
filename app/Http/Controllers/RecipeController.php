<?php

namespace App\Http\Controllers;

use App\Food;
use App\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;

class RecipeController extends Controller
{
    public function getRecipes()
    {
        $recipes = Recipe::all();
        foreach ($recipes as $recipe) {
            $recipe->cover = URL::to('/') . $recipe->cover;
        }

        return response()->json(['recipes' =>  $recipes], 200, [], JSON_NUMERIC_CHECK);
    }


    public function getRecipe($recipeId)
    {
        $recipe = Recipe::find($recipeId);

        if (!$recipe) return response()->json(['error' => 'Recipe Not Found'], 404);

        return response()->json(['recipe' => $recipe], 200);
    }

    public function postRecipe(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'subtitle' => 'required',
            'ingredients' => 'required',
            'how_to_prepare' => 'required',
            'alternative_food' => 'required',
            'food_id' => 'required',
        ]);


        if ($validator->fails()) {

            return response()->json(['errors' => $validator->errors()]);
        }

        $food = Food::where('id', $request->food_id)->first();
        if (!$food) return response()->json(['error' => 'Food Not Found'], 404, [], JSON_NUMERIC_CHECK);;

        $recipe = new   Recipe();

        $recipe->title = $request->title;
        $recipe->subtitle = $request->subtitle;
        $recipe->ingredients = $request->ingredients;
        $recipe->how_to_prepare = $request->how_to_prepare;
        $recipe->alternative_food = $request->alternative_food;
        $recipe->cover = 'cover.png';

        $food->recipes()->save($recipe);

        return response()->json(['recipe' => $recipe], 201, [], JSON_NUMERIC_CHECK);
    }

    public function putRecipe(Request $request, $recipeId)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'subtitle' => 'required',
            'ingredients' => 'required',
            'how_to_prepare' => 'required',
            'alternative_food' => 'required',
            'food_id' => 'required',
        ]);

        if ($validator->fails()) {

            return response()->json(['errors' => $validator->errors()]);
        }

        $recipe = Recipe::find($recipeId);

        if (!$recipe) return response()->json(['error' => 'Recipe Not Found'], 404);


        $recipe->update([
            'title' =>  $request->title,
            'subtitle' =>  $request->subtitle,
            'ingredients' =>  $request->ingredients,
            'how_to_prepare' =>  $request->how_to_prepare,
            'alternative_food' =>  $request->alternative_food
        ]);

        return response()->json(['recipe' => $recipe], 201);
    }

    public function deleteRecipe($recipeId)
    {
        $recipe = Recipe::find($recipeId);

        if (!$recipe) return response()->json(['error' => 'Recipe Not Found'], 404);
        $recipe->delete();

        return response()->json(['recipe' => 'Recipe deleted successfully'], 201);
    }
}
