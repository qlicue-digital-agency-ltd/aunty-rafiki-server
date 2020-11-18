<?php

namespace App\Http\Controllers;

use App\BloodLevel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BloodLevelController extends Controller
{
    public function getBloodLevels($userId)
    {

        $bloodlevels = BloodLevel::orderBy('id', 'DESC')->get();

        $filteredBloodLevels = $bloodlevels->reject(function ($bloodlevel, $index) use ($userId) {

            return $bloodlevel->user_id != $userId;
        })->values();

        return response()->json(['bloodlevels' =>  $filteredBloodLevels], 200, [], JSON_NUMERIC_CHECK);
    }


    public function getBloodLevel($bloodlevelId)
    {
        $bloodlevel = BloodLevel::find($bloodlevelId);

        if (!$bloodlevel) return response()->json(['error' => 'BloodLevel Not Found'], 404);

        return response()->json(['bloodlevel' => $bloodlevel], 200);
    }

    public function postBloodLevel(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'level' => 'required',
            'status' => 'required',
            'title' => 'required',
            'subtitle' => 'required',
            'user_id' => 'required',
            'quantity' => 'required',
            'date' => 'required'
        ]);


        if ($validator->fails()) {

            return response()->json(['errors' => $validator->errors()]);
        }

        $bloodlevel = new   BloodLevel();

        $bloodlevel->level = $request->level;
        $bloodlevel->status = $request->status;
        $bloodlevel->title = $request->title;
        $bloodlevel->date = $request->date;
        $bloodlevel->subtitle = $request->subtitle;
        $bloodlevel->quantity = $request->quantity;
        $bloodlevel->user_id = $request->user_id;

        $bloodlevel->save();

        return response()->json(['bloodlevel' => $bloodlevel], 201, [], JSON_NUMERIC_CHECK);
    }

    public function putBloodLevel(Request $request, $bloodlevelId)
    {
        $validator = Validator::make($request->all(), [
            'level' => 'required',
            'status' => 'required',
            'title' => 'required',
            'subtitle' => 'required',
            'quantity' => 'required',
            'date' => 'required'
        ]);

        if ($validator->fails()) {

            return response()->json(['errors' => $validator->errors()]);
        }

        $bloodlevel = BloodLevel::find($bloodlevelId);

        if (!$bloodlevel) return response()->json(['error' => 'BloodLevel Not Found'], 404);


        $bloodlevel->update([
            'level' =>  $request->level,
            'status' =>  $request->status,
            'title' =>  $request->title,
            'subtitle' =>  $request->subtitle,
            'quantity' =>  $request->quantity,
            'date' =>  $request->date
        ]);

        return response()->json(['bloodlevel' => $bloodlevel], 201);
    }

    public function deleteBloodLevel($bloodlevelId)
    {
        $bloodlevel = BloodLevel::find($bloodlevelId);

        if (!$bloodlevel) return response()->json(['error' => 'BloodLevel Not Found'], 404);
        $bloodlevel->delete();

        return response()->json(['bloodlevel' => 'BloodLevel deleted successfully'], 201);
    }
}
